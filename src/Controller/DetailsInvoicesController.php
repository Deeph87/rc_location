<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetailsInvoices Controller
 *
 * @property \App\Model\Table\DetailsInvoicesTable $DetailsInvoices
 *
 * @method \App\Model\Entity\DetailsInvoice[] paginate($object = null, array $settings = [])
 */
class DetailsInvoicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Invoices', 'Rentings']
        ];
        $detailsInvoices = $this->paginate($this->DetailsInvoices);

        $this->set(compact('detailsInvoices'));
        $this->set('_serialize', ['detailsInvoices']);
    }

    /**
     * View method
     *
     * @param string|null $id Details Invoice id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detailsInvoice = $this->DetailsInvoices->get($id, [
            'contain' => ['Users', 'Invoices', 'Rentings']
        ]);

        $this->set('detailsInvoice', $detailsInvoice);
        $this->set('_serialize', ['detailsInvoice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detailsInvoice = $this->DetailsInvoices->newEntity();
        if ($this->request->is('post')) {
            $detailsInvoice = $this->DetailsInvoices->patchEntity($detailsInvoice, $this->request->getData());
            if ($this->DetailsInvoices->save($detailsInvoice)) {
                $this->Flash->success(__('The details invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The details invoice could not be saved. Please, try again.'));
        }
        $users = $this->DetailsInvoices->Users->find('list', ['limit' => 200]);
        $invoices = $this->DetailsInvoices->Invoices->find('list', ['limit' => 200]);
        $rentings = $this->DetailsInvoices->Rentings->find('list', ['limit' => 200]);
        $this->set(compact('detailsInvoice', 'users', 'invoices', 'rentings'));
        $this->set('_serialize', ['detailsInvoice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Details Invoice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detailsInvoice = $this->DetailsInvoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detailsInvoice = $this->DetailsInvoices->patchEntity($detailsInvoice, $this->request->getData());
            if ($this->DetailsInvoices->save($detailsInvoice)) {
                $this->Flash->success(__('The details invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The details invoice could not be saved. Please, try again.'));
        }
        $users = $this->DetailsInvoices->Users->find('list', ['limit' => 200]);
        $invoices = $this->DetailsInvoices->Invoices->find('list', ['limit' => 200]);
        $rentings = $this->DetailsInvoices->Rentings->find('list', ['limit' => 200]);
        $this->set(compact('detailsInvoice', 'users', 'invoices', 'rentings'));
        $this->set('_serialize', ['detailsInvoice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Details Invoice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detailsInvoice = $this->DetailsInvoices->get($id);
        if ($this->DetailsInvoices->delete($detailsInvoice)) {
            $this->Flash->success(__('The details invoice has been deleted.'));
        } else {
            $this->Flash->error(__('The details invoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
