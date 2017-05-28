<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Images']
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'Images']
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Le produit a bien été enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Le produit ne peut pas être sauvegardé. Veuillez réessayer ultérieurement.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $images = $this->Products->Images->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'images'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('Le produit a bien été enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Le produit ne peut pas être sauvegardé. Veuillez réessayer ultérieurement.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $images = $this->Products->Images->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'images'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('Le produit a bien été supprimé'));
        } else {
            $this->Flash->error(__('Le produit ne peut pas être suppérimé pour le moment, veuillez réessayer ultérieurement.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
