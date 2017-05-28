<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="rentings form large-9 medium-8 columns content">
    <?= $this->Form->create($renting) ?>
    <fieldset>
        <legend><?= __('Add Renting') ?></legend>
        <?php
            echo $this->Form->control('products_id', ['options' => $products]);
            echo $this->Form->control('date_freeze_start');
            echo $this->Form->control('date_freeze_end');
            echo $this->Form->control('reference');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
