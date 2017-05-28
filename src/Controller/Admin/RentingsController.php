<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

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
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $rentings = $this->paginate($this->Rentings);

        $this->set(compact('rentings'));
        $this->set('_serialize', ['rentings']);
    }

    /**
     * View method
     *
     * @param string|null $id Renting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $renting = $this->Rentings->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('renting', $renting);
        $this->set('_serialize', ['renting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $renting = $this->Rentings->newEntity();
        if ($this->request->is('post')) {
            $renting = $this->Rentings->patchEntity($renting, $this->request->getData());
            if ($this->Rentings->save($renting)) {
                $this->Flash->success(__('The renting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The renting could not be saved. Please, try again.'));
        }
        $products = $this->Rentings->Products->find('list', ['limit' => 200]);
        $this->set(compact('renting', 'products'));
        $this->set('_serialize', ['renting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Renting id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $renting = $this->Rentings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $renting = $this->Rentings->patchEntity($renting, $this->request->getData());
            if ($this->Rentings->save($renting)) {
                $this->Flash->success(__('The renting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The renting could not be saved. Please, try again.'));
        }
        $products = $this->Rentings->Products->find('list', ['limit' => 200]);
        $this->set(compact('renting', 'products'));
        $this->set('_serialize', ['renting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Renting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $renting = $this->Rentings->get($id);
        if ($this->Rentings->delete($renting)) {
            $this->Flash->success(__('The renting has been deleted.'));
        } else {
            $this->Flash->error(__('The renting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
