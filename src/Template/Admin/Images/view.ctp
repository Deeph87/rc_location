<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="images view large-10 medium-9 columns content">
    <h3><?= h($image->id) ?></h3>
    <h3><?= $this->Html->image('upload/'.$image->path, ['alt' => 'Image '.$image->id, "class" => "image_view"]) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($image->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
    </table>
</div>
