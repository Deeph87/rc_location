<?php

//TODO Emêcher dates de locations en même temps

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class PanierController extends AppController
{

    /**
     * Add method
     *
     * @property \App\Model\Table\DetailsInvoicesTable $DetailsInvoices
     * @return \Cake\Http\Response|null
     */
    public function add()
    {
        $session = $this->request->session();
        if ($this->request->is('post') && !empty($this->request->getData('date_debut')) && !empty($this->request->getData('date_fin'))) {


            $date_debut = strtotime($this->request->getData('date_debut'));
            $date_fin = strtotime($this->request->getData('date_fin'));
            $datediff = $date_fin - $date_debut;
            $days = floor($datediff / (60 * 60 * 24));


            $list = $session->read('panier');
            $list[$this->request->getData('renting_id')] = array('renting_id' => $this->request->getData('renting_id'),
                'date_debut' => $this->request->getData('date_debut'),
                'date_fin' => $this->request->getData('date_fin'),
                'days' => $days);

            $this->request->session()->write([
                'panier' => $list
            ]);
        }
//        $session->delete('panier');
        return $this->redirect(
            ['controller' => 'Panier', 'action' => 'view']
        );
    }

    /**
     * View method
     *
     * @property \App\Model\Table\DetailsInvoicesTable $DetailsInvoices
     * @return \Cake\Http\Response|null
     */
    public function view()
    {

        $session = $this->request->session();

        //Supression d'un article
        if ($this->request->is('post') && $this->request->getData('delete')) {
            $session->delete('panier.'.$this->request->getData('delete'));
            return $this->redirect(
                ['controller' => 'Panier', 'action' => 'view']
            );
        }


        //Code promo
        if ($this->request->is('post') && $this->request->getData('promo')) {

            $promotionsTable = TableRegistry::get('Promotions');
            $promotions = $promotionsTable
                ->find()
                ->where(['code =' => $this->request->getData('promo')]);

            if (!$promotions->isEmpty()){
                $promotion = $promotions->first();
                $promo = array('code' => $this->request->getData('promo'), 'valeur' => $promotion->get('value'), 'type' => $promotion->get('type'));
                $session->write('promo', $promo);
            }
            return $this->redirect(
                ['controller' => 'Panier', 'action' => 'view']
            );
        }


        $panierSession = $session->read('panier');

        $panier = array();

        if (!empty($panierSession)){
            foreach ($panierSession as $key=>$p){
                $panier[] = $key;
            }
            $rentingsTable = TableRegistry::get('Rentings');
            $liste = $rentingsTable
                ->find()
                ->where(['Rentings.id IN' => $panier])
                ->contain(['Products']);
        } else {
            $liste = false;
        }

        $promoSession = $session->read('promo');
        if (!empty($promoSession)){
            $promo = $promoSession;
        } else {
            $promo = false;
        }

        $this->viewBuilder()->setLayout('Front/default');
        $this->set('liste', $liste);
        $this->set('panier', $panierSession);
        $this->set('promo', $promo);
        $this->set('_serialize', ['liste']);

    }

    /**
     * Creation method
     *
     * @property \App\Model\Table\DetailsInvoicesTable $DetailsInvoices
     * @return \Cake\Http\Response|null
     */
    public function creation()
    {


        $session = $this->request->session();
        $etat = true;
        $panier = $session->read('panier');
        if (!empty($panier)) {
            $list = array();
            foreach ($panier as $p){
                $list[] = array('renting_id' => $p['renting_id'],
                    'date_debut' => $p['date_debut'],
                    'date_fin' => $p['date_fin']);
            }

            $rentings = TableRegistry::get('Rentings');
            $total_price = 0;
            foreach ($list as $key=>$l){
                $date_debut = strtotime($l['date_debut']);
                $date_fin = strtotime($l['date_fin']);
                $datediff = $date_fin - $date_debut;
                $days = floor($datediff / (60 * 60 * 24));
                $query = $rentings->find()->where(['Rentings.id =' => $l['renting_id']])->contain(['Products'])->first();
                $list[$key]['price'] = $query->product->price * $days;
                $list[$key]['days'] = $days;
                $total_price = $total_price + ($query->product->price * $days);
            }

            //promotions
            $promo = $session->read('promo');
            if (!empty($promo)) {
                switch ($promo['type']) {
                    case 0:
                        $total_price = $total_price - $promo['valeur'];
                        break;
                    case 1:
                        $total_price = $total_price * (1 - ($promo['valeur'] / 100));
                        break;
                }
            }
            $user_id = $this->Auth->user('id');
            $invoicesTable = TableRegistry::get('Invoices');
            $invoices = $invoicesTable->newEntity();
            $invoices->price = $total_price;
            $date =  Time::now();
            $date->timezone = 'Europe/Paris';
            $invoices->date = $date;
            $user = $invoicesTable->Users->get($user_id);
            $invoices->user = $user;
            if ($invoicesTable->save($invoices)) {
                $invoicesId = $invoices->id;
                foreach ($list as $l){
                    $rentings = TableRegistry::get('Rentings');
                    $rentings = $rentings->get($l['renting_id']);
                    $detailsInvoiceTable = TableRegistry::get('DetailsInvoices');
                    $detailsInvoice = $detailsInvoiceTable->newEntity();
                    $detailsInvoice->day_range = $l['days'];
                    $detailsInvoice->price = $l['price'];
                    $detailsInvoice->date_start = $l['date_debut'];
                    $detailsInvoice->date_end = $l['date_fin'];
                    $detailsInvoice->user = $user;
                    $detailsInvoice->renting = $rentings;
                    $detailsInvoice->invoice = $invoices;
                    if (!$detailsInvoiceTable->save($detailsInvoice))$etat = false;
                    $this->viewBuilder()->setLayout('Front/default');
                    $session->delete('panier');
                    $session->delete('promo');
                }
            } else {
                $etat = false;
            }
        } else {
            $etat = false;
        }
        $this->set('etat', $etat);

    }
    
}