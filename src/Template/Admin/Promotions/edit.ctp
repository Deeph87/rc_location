<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="promotions form large-10 medium-9 columns content">
    <?= $this->Form->create($promotion) ?>
    <fieldset>
        <legend><?= __('Edit Promotion') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('status');
            echo $this->Form->control('value');
            echo $this->Form->control('code');
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
