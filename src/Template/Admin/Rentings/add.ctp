<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="rentings form large-10 medium-9 columns content">
    <?= $this->Form->create($renting) ?>
    <fieldset>
        <legend><?= __('Add Renting') ?></legend>
        <?php
            echo $this->Form->control('products_id', ['options' => $products]);
            echo $this->Form->control('date_freeze_start', ['empty' => true, 'required' => false, 'default' => '']);
            echo $this->Form->control('date_freeze_end', ['empty' => true, 'required' => false]);
            echo $this->Form->control('reference');
            echo $this->Form->select(
                'status',
                [1 => 'Disponible', 0 => 'Non disponible']
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
