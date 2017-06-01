<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Model\Entity\Invoice;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

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
            'contain' => ['Users', 'Rentings', 'Invoices']
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
            'contain' => ['Users', 'Rentings', 'Invoices']
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
        $rentings = $this->DetailsInvoices->Rentings->find('list', ['limit' => 200]);
        $invoices = $this->DetailsInvoices->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('detailsInvoice', 'users', 'rentings', 'invoices'));
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
        $rentings = $this->DetailsInvoices->Rentings->find('list', ['limit' => 200]);
        $invoices = $this->DetailsInvoices->Invoices->find('list', ['limit' => 200]);
        $this->set(compact('detailsInvoice', 'users', 'rentings', 'invoices'));
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

    /**
     * Test method
     *
     * @return \Cake\Http\Response|null
     */
    public function test()
    {
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

            $query = $rentings->find()
                ->where(['Rentings.id =' => $l['renting_id']])
                ->contain([
                    'Products'
                ])
                ->first();

            $list[$key]['price'] = $query->product->price * $days;
            $list[$key]['days'] = $days;
            $total_price = $total_price + ($query->product->price * $days);
        }

        $user_id = $this->Auth->user('id');

        $detailsInvoice = $this->DetailsInvoices->newEntity();
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
        }


    }
}
