<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('flexslider') ?>
    <?= $this->Html->css('font-awesome') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body>

<!-- header -->
<?php
    $is_connected = $this->request->session()->check('Auth.User');
    $current_user = $this->request->session()->read('Auth.User');
    var_dump(\App\Model\Entity\User::ADMIN);
?>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="<?php echo $this->Url->build([
                    'controller' => 'Default',
                    'action' => 'index'
                ]); ?>"><span>RC</span> Location</a>
            </h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li>
                    <?=
                        $this->Html->link(
                            'Home',
                            ['controller' => 'Default', 'action' => 'index']
                        );
                    ?>
                </li>
                <li>
                    <?php
                        if(!$is_connected) {
                            ?>
                            <i>/</i>
                            <?php
                            echo $this->Html->link(
                                'Login',
                                ['controller' => 'Users', 'action' => 'login']
                            );
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if(!$is_connected) {
                            ?>
                            <i>/</i>
                            <?php
                            echo $this->Html->link(
                                'Register',
                                ['controller' => 'Users', 'action' => 'add']
                            );
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($is_connected) {
                            ?>
                            <i>/</i>
                            <?php
                            echo 'Welcome ' . $this->request->session()->read('Auth.User.username');
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($is_connected) {
                            ?>
                            <i>/</i>
                            <?php
                            echo $this->Html->link(
                                'Logout',
                                ['controller' => 'Users', 'action' => 'logout']
                            );
                        }
                    ?>
                </li>
                <li>
                    <?php
                        if($is_connected && $current_user['role'] == \App\Model\Entity\User::ADMIN) {
                            ?>
                            <i>/</i>
                            <?php
                            echo $this->Html->link(
                                'Administration',
                                ['controller' => 'Products', 'action' => 'index']
                            );
                        }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <?= $this->fetch('content') ?>
</div>

<!-- //top-brands -->

<!--    <nav class="top-bar expanded" data-topbar role="navigation">-->
<!--        <ul class="title-area large-3 medium-4 columns">-->
<!--            <li class="name">-->
<!--                <h1><a href="">--><?php /*$this->fetch('title')*/ ?><!--</a></h1>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </nav>-->
<!--    --><?php //$this->Flash->render() ?>
<!--    <div class="container clearfix">-->
<!--        --><?php //$this->fetch('content') ?>
<!--    </div>-->
<!-- footer -->
<!--<div class="footer">-->
<!--    <div class="container">-->
<!--        <div class="wthree_footer_copy">-->
<!--            <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- //footer -->

    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('counterup.min') ?>
    <?= $this->Html->script('easing') ?>
    <?= $this->Html->script('jquery.flexslider') ?>
    <?= $this->Html->script('jquery.wmuSlider') ?>
    <?= $this->Html->script('jquery-1.11.1.min') ?>
    <?= $this->Html->script('minicart.min') ?>
    <?= $this->Html->script('move-top') ?>
    <?= $this->Html->script('okzoom') ?>
    <?= $this->Html->script('waypoints.min') ?>
    <?= $this->fetch('script') ?>

</body>
</html>
