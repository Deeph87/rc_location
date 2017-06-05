<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="rentings form large-10 medium-9 columns content">
    <?= $this->Form->create($renting) ?>
    <fieldset>
        <legend><?= __('Ajouter un stock') ?></legend>
        <?php
            echo $this->Form->control('products_id', ['options' => $products, 'label' => 'Produit', 'required' => true]);
            echo $this->Form->control('date_freeze_start', ['empty' => true, 'required' => false, 'default' => '', 'label' => 'Date gèle début']);
            echo $this->Form->control('date_freeze_end', ['empty' => true, 'required' => false, 'label' => 'Date gèle fin']);
            echo $this->Form->control('reference', ['label' => 'Réference']);
            echo $this->Form->label('Etat');
            echo $this->Form->select(
                'status',
                [1 => 'Disponible', 0 => 'Non disponible']
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
