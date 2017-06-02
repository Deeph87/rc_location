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
        $query = $this->Rentings->find('all')->where(['products_id' => $product_id]);
        $rentings = $this->paginate($query);
        $this->set('id_product', $product_id);

        $productTable = TableRegistry::get('Products');
        $product = $productTable->get($product_id, ['contain' => ['Images']]);


        $this->viewBuilder()->setLayout('Front/default');
        $this->set(compact('rentings'));
        $this->set('product', $product);
        $this->set('_serialize', ['rentings']);

    }
}
