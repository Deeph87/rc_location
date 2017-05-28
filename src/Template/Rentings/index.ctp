<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Renting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rentings index large-9 medium-8 columns content">
    <h3><?= __('Rentings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_freeze_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_freeze_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rentings as $renting): ?>
            <tr>
                <td><?= $this->Number->format($renting->id) ?></td>
                <td><?= $renting->has('product') ? $this->Html->link($renting->product->title, ['controller' => 'Products', 'action' => 'view', $renting->product->id]) : '' ?></td>
                <td><?= h($renting->date_freeze_start) ?></td>
                <td><?= $this->Number->format($renting->date_freeze_end) ?></td>
                <td><?= h($renting->reference) ?></td>
                <td><?= $this->Number->format($renting->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $renting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $renting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $renting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $renting->id)]) ?>
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
