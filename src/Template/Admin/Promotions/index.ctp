<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="promotions index large-9 medium-8 columns content">
    <h3><?= __('Promotions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Libellé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type', 'Type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', 'Statut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value', 'Valeur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code', 'Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('products_id', 'Produit') ?></th>
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
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $promotion->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $promotion->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $promotion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promotion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('premier')) ?>
            <?= $this->Paginator->prev('< ' . __('précedent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('suivant') . ' >') ?>
            <?= $this->Paginator->last(__('dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, affiche {{current}} élements sur {{count}} total')]) ?></p>
    </div>
</div>
