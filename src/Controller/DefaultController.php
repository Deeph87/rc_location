<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class DefaultController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
//        $this->paginate = [
//            'contain' => ['Images']
//        ];
//        $categories = $this->paginate($this->Categories);

//        $this->set(compact('categories'));
//        $this->set('_serialize', ['categories']);
        $this->viewBuilder()->setLayout('Front/default');

        $this->set(['toto' => 'Bonjour bande de cons !!!']);
//        $this->set(['toto' => 'Bonjour bande de cons !!!']);
    }


}
