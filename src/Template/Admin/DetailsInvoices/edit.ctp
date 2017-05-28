<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="detailsInvoices form large-9 medium-8 columns content">
    <?= $this->Form->create($detailsInvoice) ?>
    <fieldset>
        <legend><?= __('Edit Details Invoice') ?></legend>
        <?php
            echo $this->Form->control('date_start');
            echo $this->Form->control('date_end');
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('products_id', ['options' => $products]);
            echo $this->Form->control('invoices_id', ['options' => $invoices]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
