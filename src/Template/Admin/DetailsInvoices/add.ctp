<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="detailsInvoices form large-10 medium-9 columns content">
    <?= $this->Form->create($detailsInvoice) ?>
    <fieldset>
        <legend><?= __('Add Details Invoice') ?></legend>
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
