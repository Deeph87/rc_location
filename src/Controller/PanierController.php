<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class PanierController extends AppController
{


    public function index($user_id = null)
    {
        $this->set('user_id', $user_id);
    }

    /**
     * Creation method
     *
     * @property \App\Model\Table\DetailsInvoicesTable $DetailsInvoices
     * @return \Cake\Http\Response|null
     */
    public function creation($list = array())
    {
        $etat = true;
        $list = array(
            array('renting_id' => 1,
                'date_debut' => '2017-06-02',
                'date_fin' => '2017-07-01'),
            array('renting_id' => 2,
                'date_debut' => '2017-06-02',
                'date_fin' => '2017-06-03'),
            array('renting_id' => 3,
                'date_debut' => '2017-06-02',
                'date_fin' => '2017-06-12')
        );

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
            }
        } else {
            $etat = false;
        }
        $this->set('etat', $etat);
    }
}