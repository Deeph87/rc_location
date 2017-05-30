<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $category->has('image') ? $this->Html->link($category->image->id, ['controller' => 'Images', 'action' => 'view', $category->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
</div>
