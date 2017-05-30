<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('images_id', ['options' => $images, 'class' => 'image_select']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->image('upload/491550.jpg', ['alt' => 'Image', 'class' => 'image_view']); ?>

</div>
<?= $this->Html->script('custom') ?>