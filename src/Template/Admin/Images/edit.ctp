<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
        echo $this->Form->input('path', ['type' => 'file']);
        echo $this->Form->input('dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
