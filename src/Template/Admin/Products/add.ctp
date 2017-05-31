<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="products form large-10 medium-9 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Ajouter un produit') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => 'Libellé']);
            echo $this->Form->control('description');
            echo $this->Form->control('price', ['required' => true, 'label' => 'Prix']);
            echo $this->Form->control('categories_id', ['options' => $categories, 'label' => 'Catégorie']);
            echo $this->Form->control('images_id', ['options' => $images, 'label' => 'Image', 'class' => 'image_select']);
            echo $this->Form->label('Etat');
            echo $this->Form->select(
                'etat',
                [1 => 'Disponible', 0 => 'Non disponible']
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Sauvegarder')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->image('upload/_.png', ['alt' => 'Image', 'class' => 'image_view']); ?>
</div>
