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
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="index.html"><span>RC</span> Location</a></h1>
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
                    <i>/</i>
                </li>
                <li>
                    <?=
                    $this->Html->link(
                        'Login',
                        ['controller' => 'Users', 'action' => 'login']
                    );
                    ?>
                    <i>/</i>
                </li>
                <li>
                    <?=
                    $this->Html->link(
                        'Register',
                        ['controller' => 'Users', 'action' => 'add']
                    );
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Last products</h3>
        <div class="agile_top_brands_grids">
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="tag"><img src="img/tag.png" alt=" " class="img-responsive" /></div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title=" " alt=" " src="img/1.png" /></a>
                                        <p>fortune sunflower oil</p>
                                        <h4>$7.99 <span>$10.00</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                                <input type="hidden" name="amount" value="7.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img title=" " alt=" " src="img/3.png" /></a>
                                        <p>basmati rise (5 Kg)</p>
                                        <h4>$11.99 <span>$15.00</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="basmati rise" />
                                                <input type="hidden" name="amount" value="11.99" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="img/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="img/2.png" alt=" " class="img-responsive" /></a>
                                        <p>Pepsi soft drink (2 Ltr)</p>
                                        <h4>$8.00 <span>$10.00</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Pepsi soft drink" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <img src="img/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="single.html"><img src="img/4.png" alt=" " class="img-responsive" /></a>
                                        <p>dogs food (4 Kg)</p>
                                        <h4>$9.00 <span>$11.00</span></h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="dogs food" />
                                                <input type="hidden" name="amount" value="9.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
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
