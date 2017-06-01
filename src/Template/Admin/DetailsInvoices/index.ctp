<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="detailsInvoices index large-10 medium-9 columns content">
    <h3><?= __('Details Invoices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day_range') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoices_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rentings_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detailsInvoices as $detailsInvoice): ?>
            <tr>
                <td><?= $this->Number->format($detailsInvoice->id) ?></td>
                <td><?= $this->Number->format($detailsInvoice->day_range) ?></td>
                <td><?= h($detailsInvoice->date_start) ?></td>
                <td><?= h($detailsInvoice->date_end) ?></td>
                <td><?= $this->Number->format($detailsInvoice->price) ?></td>
                <td><?= $detailsInvoice->has('user') ? $this->Html->link($detailsInvoice->user->id, ['controller' => 'Users', 'action' => 'view', $detailsInvoice->user->id]) : '' ?></td>
                <td><?= $detailsInvoice->has('invoice') ? $this->Html->link($detailsInvoice->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $detailsInvoice->invoice->id]) : '' ?></td>
                <td><?= $detailsInvoice->has('renting') ? $this->Html->link($detailsInvoice->renting->id, ['controller' => 'Rentings', 'action' => 'view', $detailsInvoice->renting->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detailsInvoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detailsInvoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detailsInvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsInvoice->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
