<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="detailsInvoices view large-9 medium-8 columns content">
    <h3><?= h($detailsInvoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $detailsInvoice->has('user') ? $this->Html->link($detailsInvoice->user->id, ['controller' => 'Users', 'action' => 'view', $detailsInvoice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $detailsInvoice->has('invoice') ? $this->Html->link($detailsInvoice->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $detailsInvoice->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Renting') ?></th>
            <td><?= $detailsInvoice->has('renting') ? $this->Html->link($detailsInvoice->renting->id, ['controller' => 'Rentings', 'action' => 'view', $detailsInvoice->renting->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detailsInvoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day Range') ?></th>
            <td><?= $this->Number->format($detailsInvoice->day_range) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($detailsInvoice->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Start') ?></th>
            <td><?= h($detailsInvoice->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date End') ?></th>
            <td><?= h($detailsInvoice->date_end) ?></td>
        </tr>
    </table>
</div>
