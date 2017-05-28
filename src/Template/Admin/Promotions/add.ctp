<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Promotions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="promotions form large-9 medium-8 columns content">
    <?= $this->Form->create($promotion) ?>
    <fieldset>
        <legend><?= __('Add Promotion') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('type');
            echo $this->Form->control('status');
            echo $this->Form->control('value');
            echo $this->Form->control('code');
            echo $this->Form->control('products_id', ['options' => $products, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
