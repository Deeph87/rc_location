<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="invoices index large-10 medium-9 columns content">
    <h3><?= __('Factures') ?></h3>
    <?= $this->Html->link(__('Ajouter une facture'), ['action' => 'add'], array('class' => 'button')) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price', 'Prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id', 'Utilisateur') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->id) ?></td>
                <td><?= $this->Number->format($invoice->price) ?></td>
                <td><?= h($invoice->date) ?></td>
                <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->id, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $invoice->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $invoice->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('premier')) ?>
            <?= $this->Paginator->prev('< ' . __('précedent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('suivant') . ' >') ?>
            <?= $this->Paginator->last(__('dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, affiche {{current}} élements sur {{count}} total')]) ?></p>
    </div>
</div>
