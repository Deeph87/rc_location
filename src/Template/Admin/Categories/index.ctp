<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Catégories') ?></h3>
    <?= $this->Html->link(__('Ajouter une catégorie'), ['action' => 'add'], array('class' => 'button')) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Libellé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images_id', 'Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->title) ?></td>
                <td><?= $category->has('image') ? $this->Html->link($category->image->id, ['controller' => 'Images', 'action' => 'view', $category->image->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $category->id], ['confirm' => __('Êtes vous sur de vouloir supprimer : {0}?', $category->title)]) ?>
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
