<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class PersonnalsController extends AppController
{


    public function view()
    {

        $user_id = $this->Auth->user('id');

        $details_invoices = $this->loadModel('DetailsInvoices');

        $details_invoices_per_renter = $details_invoices->find('all', [
            'conditions' => ['DetailsInvoices.users_id' => $user_id]
        ])->matching(
            'Rentings.Products', function($q){
            return $q->where(['Products.id = Rentings.products_id']);
        });

//        debug($details_invoices_per_renter['_matchingData']['Rentings']->status);

        $this->viewBuilder()->setLayout('Front/default');
        !empty($details_invoices_per_renter) ? $this->set('details_invoices_per_renter', $details_invoices_per_renter) : $this->set('details_invoices_per_renter', []);

    }
}