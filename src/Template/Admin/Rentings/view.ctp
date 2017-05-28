<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="rentings view large-9 medium-8 columns content">
    <h3><?= h($renting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $renting->has('product') ? $this->Html->link($renting->product->title, ['controller' => 'Products', 'action' => 'view', $renting->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reference') ?></th>
            <td><?= h($renting->reference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($renting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Freeze End') ?></th>
            <td><?= $this->Number->format($renting->date_freeze_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($renting->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Freeze Start') ?></th>
            <td><?= h($renting->date_freeze_start) ?></td>
        </tr>
    </table>
</div>
