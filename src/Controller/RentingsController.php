<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Rentings Controller
 *
 * @property \App\Model\Table\RentingsTable $Rentings
 */
class RentingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($product_id)
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $query = $this->Rentings->find('all')->where(['products_id' => $product_id, 'etat' => 1]);
        $rentings = $this->paginate($query);
        $this->set('id_product', $product_id);

        $productTable = TableRegistry::get('Products');
        $product = $productTable->get($product_id, ['contain' => ['Images']]);


        $this->viewBuilder()->setLayout('Front/default');
        $this->set(compact('rentings'));
        $this->set('product', $product);
        $this->set('_serialize', ['rentings']);

    }

    public function dates()
    {

        $this->autoRender = false;

        if ($this->request->is('post')) {

            $detailsInvoicesTable = TableRegistry::get('DetailsInvoices');
            $rentingsTable = TableRegistry::get('Rentings');
            $rentings_id = $this->request->getData('id');

            $detailsInvoices = $detailsInvoicesTable->find()
                ->where(['detailsInvoices.rentings_id' => $rentings_id])
                ->contain(['Rentings']);

            $dates = array();
            foreach ($detailsInvoices as $detail){
                $date_debut = strtotime($detail['date_start']);
                $date_fin = strtotime($detail['date_end']);
                $datediff = $date_fin - $date_debut;
                $days = floor($datediff / (60 * 60 * 24));

                for($i=0;$i<=$days;$i++)
                {
                    $dates[] = date('Y/m/d',$date_debut);
                    $date_debut+=60*60*24;
                }
            }

            $rentings = $rentingsTable->find()
                ->where(['id' => $rentings_id]);

            foreach ($rentings as $renting){
                $date_debut = strtotime($renting['date_freeze_start']);
                $date_fin = strtotime($renting['date_freeze_end']);
                $datediff = $date_fin - $date_debut;
                $days = floor($datediff / (60 * 60 * 24));

                for($i=0;$i<=$days;$i++)
                {
                    $dates[] = date('Y/m/d',$date_debut);
                    $date_debut+=60*60*24;
                }
            }

            $dates = json_encode(array_unique($dates));

            $resultJ = json_encode(array('status' => 'success', 'dates' => $dates));
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
            //$this->Flash->error(__('The location could not be saved. Please, try again.'));
            $resultJ = json_encode(array('status' => 'error'));

            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }
}
