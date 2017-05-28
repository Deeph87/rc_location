<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Promotion'), ['action' => 'edit', $promotion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Promotion'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Promotions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Promotion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="promotions view large-9 medium-8 columns content">
    <h3><?= h($promotion->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($promotion->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($promotion->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $promotion->has('product') ? $this->Html->link($promotion->product->title, ['controller' => 'Products', 'action' => 'view', $promotion->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($promotion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($promotion->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($promotion->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($promotion->value) ?></td>
        </tr>
    </table>
</div>
