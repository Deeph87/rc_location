<div class="col-md-2"></div>
<div class="col-md-8 form-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">

        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>

        <p class="section-title">Connexion :</p>
        <div class="input-group">
            <span class="input-group-addon">Username</span>
            <?= $this->Form->input('username', ['label' => false, 'class' => 'form-control']) ?>
        </div>
        <div class="input-group">
            <span class="input-group-addon">Password</span>
            <?= $this->Form->input('password', ['label' => false, 'class' => 'form-control']) ?>
        </div>
        <div class="btn-group" role="group" aria-label="...">
            <?= $this->Form->button(__('Se connecter'), ['class' => 'btn btn-default']); ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="col-md-2"></div>