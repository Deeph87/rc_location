<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="promotions index large-10 medium-9 columns content">
    <h3>Promotions</h3>
    <?= $this->Html->link(__('Ajouter une promotion'), ['action' => 'add'], array('class' => 'button')) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title', 'Libellé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code', 'Code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value', 'Valeur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type', 'Type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', 'Etat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($promotions as $promotion): ?>
                <?php $etatLibelle = array('0' => 'Non Disponible', '1' => 'Disponible') ?>
                <?php $statusLibelle = array('0' => 'Soustraction', '1' => 'Pourcentage') ?>
            <tr>
                <td><?= $this->Number->format($promotion->id) ?></td>
                <td><?= h($promotion->title) ?></td>
                <td><?= h($promotion->code) ?></td>
                <td><?= $this->Number->format($promotion->value) ?></td>
                <td><?= $statusLibelle[$this->Number->format($promotion->type)] ?></td>
                <td><?= $etatLibelle[$this->Number->format($promotion->status)] ?></td>
                <td class="actions">
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
