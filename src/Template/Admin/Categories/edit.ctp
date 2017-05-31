<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories form large-10 medium-9 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Ajouter une catégorie') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => 'Titre']);
            echo $this->Form->control('images_id', ['options' => $images, 'class' => 'image_select']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Envoyer')) ?>
    <?= $this->Form->end() ?>
</div>
