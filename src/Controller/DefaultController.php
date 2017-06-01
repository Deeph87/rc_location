<?php
namespace App\Controller;

use App\Controller\AppController;

class DefaultController extends AppController
{


    public function index()
    {
        $this->loadModel('Categories');
        $this->loadModel('Products');

        $categories = $this->Categories->find('all');
        $ret = [];

        foreach ($categories as $cat){

            $cat_id = $cat->get('id');
            $cat_name = $cat->get('title');
            $products = $this->Products->find('all', [
                'conditions' => ['Products.categories_id' => $cat_id],
                'contain' => ['Images']
            ]);

            foreach ($products as $product){
                $ret[$cat_name][] = $product;
            }
        }

        $this->viewBuilder()->setLayout('Front/default');
        $this->set(['ret' => $ret]);
    }


}
