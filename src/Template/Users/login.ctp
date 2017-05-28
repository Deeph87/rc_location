<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend>
            <?= __("Merci de rentrer vos identifiants pour vous connecter") ?>
            <?= $this->Form->input('username') ?>
            <?= $this->Form->input('password') ?>
        </legend>
    </fieldset>
    <?= $this->Form->button(__('Se connecter')); ?>
    <?= $this->Form->end() ?>
</div>