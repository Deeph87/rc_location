<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detailsInvoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detailsInvoice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Details Invoices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rentings'), ['controller' => 'Rentings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Renting'), ['controller' => 'Rentings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detailsInvoices form large-9 medium-8 columns content">
    <?= $this->Form->create($detailsInvoice) ?>
    <fieldset>
        <legend><?= __('Edit Details Invoice') ?></legend>
        <?php
            echo $this->Form->control('day_range');
            echo $this->Form->control('date_start');
            echo $this->Form->control('date_end');
            echo $this->Form->control('price');
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('invoices_id', ['options' => $invoices]);
            echo $this->Form->control('rentings_id', ['options' => $rentings]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
