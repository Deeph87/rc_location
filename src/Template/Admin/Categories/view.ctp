<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories view large-10 medium-9 columns content">
    <h3><?= h($category->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td>
                <?php
                if($category->has('image')){
                    ?>
                    <a href="<?php echo $this->Url->build(['controller' => 'Images', 'action' => 'view', $category->image->id]); ?>"><?php echo $this->Html->image('upload/'.$category->image->path, ['alt' => 'Image '.$category->image->id, "class" => "image_cat_view"]); ?></a>
                    <?php
                }
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
</div>
