<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="promotions form large-10 medium-9 columns content">
    <?= $this->Form->create($promotion) ?>
    <fieldset>
        <legend><?= __('Ajouter une promotion') ?></legend>
        <?php
            echo $this->Form->control('title', ['required' => true, 'label' => 'Libellé']);
            echo $this->Form->control('value', ['required' => true, 'label' => 'Valeur']);
            echo $this->Form->control('code', ['required' => true, 'label' => 'Code']);
            echo $this->Form->label('Type');
            echo $this->Form->select(
                'type',
                [0 => 'Soustraction', 1 => 'Pourcentage']
            );
            echo $this->Form->label('status', 'Etat');
            echo $this->Form->select(
                'status',
                [1 => 'Disponible', 0 => 'Non disponible']
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
