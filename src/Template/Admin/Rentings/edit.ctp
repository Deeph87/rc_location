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
                ['action' => 'delete', $renting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $renting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rentings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rentings form large-9 medium-8 columns content">
    <?= $this->Form->create($renting) ?>
    <fieldset>
        <legend><?= __('Edit Renting') ?></legend>
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
