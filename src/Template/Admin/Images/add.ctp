<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="images form large-10 medium-9 columns content">
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Ajouter une image') ?></legend>
        <?php
        echo $this->Form->input('path', ['type' => 'file']);
        echo $this->Form->input('dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Valider')) ?>
    <?= $this->Form->end() ?>
</div>
