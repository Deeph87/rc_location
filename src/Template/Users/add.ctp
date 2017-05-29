<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-md-2"></div>
<div class="col-md-8 form-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create($user) ?>

        <p class="section-title">Inscription :</p>

        <div class="input-group">
            <span class="input-group-addon">Username</span>
            <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="input-group">
            <span class="input-group-addon">Firstname</span>
            <?= $this->Form->control('firstname', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="input-group">
            <span class="input-group-addon">Lastname</span>
            <?= $this->Form->control('lastname', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="input-group">
            <span class="input-group-addon">Mail</span>
            <?= $this->Form->control('mail', ['label' => false, 'class' => 'form-control', 'type' => 'email']); ?>
        </div>
        <!--<div class="input-group">
            <span class="input-group-addon">City</span>
            <?/*= $this->Form->control('city', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->
        <!--<div class="input-group">
            <span class="input-group-addon">Zip code</span>
            <?/*= $this->Form->control('zip_code', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->
        <!--<div class="input-group">
            <span class="input-group-addon">Address</span>
            <?/*= $this->Form->control('address', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->
        <!--<div class="input-group">
            <span class="input-group-addon">Address add</span>
            <?/*= $this->Form->control('address_add', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->
        <!--<div class="input-group">
            <span class="input-group-addon">Phone</span>
            <?/*= $this->Form->control('phone', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->
        <div class="input-group">
            <span class="input-group-addon">Password</span>
            <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control']); ?>
        </div>
        <!--<div class="input-group">
            <span class="input-group-addon">Role</span>
            <?/*= $this->Form->control('role', ['label' => false, 'class' => 'form-control']); */?>
        </div>-->

        <div class="btn-group" role="group" aria-label="...">
            <?= $this->Form->button(__('Enregistrer'), ['class' => 'btn btn-default']); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="col-md-2"></div>

<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?/*= __('Actions') */?></li>
        <li><?/*= $this->Html->link(__('List Users'), ['action' => 'index']) */?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?/*= $this->Form->create($user) */?>
    <fieldset>
        <legend><?/*= __('Add User') */?></legend>
        <?php
/*            echo $this->Form->control('username');
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('mail');
            echo $this->Form->control('city');
            echo $this->Form->control('zip_code');
            echo $this->Form->control('address');
            echo $this->Form->control('address_add');
            echo $this->Form->control('phone');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
        */?>
    </fieldset>
    <?/*= $this->Form->button(__('Submit')) */?>
    <?/*= $this->Form->end() */?>
</div>-->
