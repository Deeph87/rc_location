<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="products index large-9 medium-8 columns content">
    <h3>Produits</h3>
    <?= $this->Html->link(__('Ajouter un produit'), ['action' => 'add'], array('class' => 'button')) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Libellé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price', 'Prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_id', 'Catégorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images_id', 'Image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat', 'Etat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->title) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $product->has('category') ? $this->Html->link($product->category->title, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                <td><?= $product->has('image') ? $this->Html->link($product->image->id, ['controller' => 'Images', 'action' => 'view', $product->image->id]) : '' ?></td>
                <td><?= $this->Number->format($product->etat) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $product->id], ['confirm' => __('Êtes vous sur de vouloir supprimer # {0}?', $product->id)]) ?>
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
