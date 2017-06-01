<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="rentings index large-10 medium-9 columns content">
    <h3>Stocks</h3>
    <?php

    if (isset($id_product)){
        echo $this->Html->link(__('Ajouter stock'), ['controller' => 'rentings', 'action' => 'add', $id_product], array('class' => 'button'));
    } else {
        echo $this->Html->link(__('Ajouter un stock'), ['action' => 'add'], array('class' => 'button'));
    }

    ?>

    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('products_id', 'Produit') ?></th>
            <th scope="col"><?= $this->Paginator->sort('date_freeze_start', 'Date gèle début') ?></th>
            <th scope="col"><?= $this->Paginator->sort('date_freeze_end', 'Date gèle fin') ?></th>
            <th scope="col"><?= $this->Paginator->sort('reference', 'Réference') ?></th>
            <th scope="col"><?= $this->Paginator->sort('status', 'Etat') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rentings as $renting): ?>
            <?php $etatLibelle = array('0' => 'Non Disponible', '1' => 'Disponible') ?>
            <tr>
                <td><?= $this->Number->format($renting->id) ?></td>
                <td><?= $renting->has('product') ? $this->Html->link($renting->product->title, ['controller' => 'Products', 'action' => 'view', $renting->product->id]) : '' ?></td>
                <td><?= h($renting->date_freeze_start) ?></td>
                <td><?= h($renting->date_freeze_end) ?></td>
                <td><?= h($renting->reference) ?></td>
                <td><?= $etatLibelle[$this->Number->format($renting->status)] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $renting->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $renting->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $renting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $renting->id)]) ?>
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
