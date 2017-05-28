<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Details Invoice'), ['action' => 'edit', $detailsInvoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Details Invoice'), ['action' => 'delete', $detailsInvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detailsInvoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Details Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Details Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detailsInvoices view large-9 medium-8 columns content">
    <h3><?= h($detailsInvoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $detailsInvoice->has('user') ? $this->Html->link($detailsInvoice->user->id, ['controller' => 'Users', 'action' => 'view', $detailsInvoice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $detailsInvoice->has('product') ? $this->Html->link($detailsInvoice->product->title, ['controller' => 'Products', 'action' => 'view', $detailsInvoice->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $detailsInvoice->has('invoice') ? $this->Html->link($detailsInvoice->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $detailsInvoice->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detailsInvoice->id) ?></td>
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
