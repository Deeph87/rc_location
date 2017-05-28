<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Promotion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="promotions index large-9 medium-8 columns content">
    <h3><?= __('Promotions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promotions as $promotion): ?>
            <tr>
                <td><?= $this->Number->format($promotion->id) ?></td>
                <td><?= h($promotion->title) ?></td>
                <td><?= $this->Number->format($promotion->type) ?></td>
                <td><?= $this->Number->format($promotion->status) ?></td>
                <td><?= $this->Number->format($promotion->value) ?></td>
                <td><?= h($promotion->code) ?></td>
                <td><?= $promotion->has('product') ? $this->Html->link($promotion->product->title, ['controller' => 'Products', 'action' => 'view', $promotion->product->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $promotion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $promotion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
