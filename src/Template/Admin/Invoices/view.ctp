<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->id, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($invoice->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($invoice->date) ?></td>
        </tr>
    </table>
</div>
