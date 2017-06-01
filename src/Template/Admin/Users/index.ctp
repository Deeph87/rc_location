<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <?= $this->Html->link(__('Ajouter un utilisateur'), ['action' => 'add'], array('class' => 'button')) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', 'Pseudo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname', 'Prénom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname', 'Nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail',  'Mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city', 'Ville') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code', 'Code postal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address', 'Adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_add', 'Complément d\'adresse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone', 'Téléphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password', 'Mot de passe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role', 'Rôle') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <?php $roleLibelle = array('0' => 'Loueur', '1' => 'Administrateur') ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->mail) ?></td>
                <td><?= h($user->city) ?></td>
                <td><?= $this->Number->format($user->zip_code) ?></td>
                <td><?= h($user->address) ?></td>
                <td><?= h($user->address_add) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= $roleLibelle[$this->Number->format($user->role)] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Voir'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Êtes vous sur de vouloir supprimer : {0}?', $user->username)]) ?>
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
