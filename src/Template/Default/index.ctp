<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>Products</h2>

        <div class="agile_top_brands_grids">
            <?php foreach($ret as $cat => $product){
                echo '<div class="row">';
                echo '<h3>'.$cat.'</h3>';
                foreach ($product as $datas){
                    ?>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
<!--                                <div class="tag"><img src="img/tag.png" alt=" " class="img-responsive" /></div>-->
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><?php echo $this->Html->image('upload/'.$datas->image->path, ['alt' => 'Image '.$datas->id, "class" => "image_index"]); ?></a>
                                                <p><?php echo $datas->title.' : '.$datas->description; ?></p>
                                                <h4><?php echo $datas->price.' € / jour'; ?></h4>
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
                    <?php
                }
                echo '</div>';
            }
            ?>

<!--            <div class="col-md-3 top_brand_left">-->
<!--                <div class="hover14 column">-->
<!--                    <div class="agile_top_brand_left_grid">-->
<!--                        <div class="agile_top_brand_left_grid1">-->
<!--                            <figure>-->
<!--                                <div class="snipcart-item block" >-->
<!--                                    <div class="snipcart-thumb">-->
<!--                                        <a href="single.html"><img title=" " alt=" " src="img/3.png" /></a>-->
<!--                                        <p>basmati rise (5 Kg)</p>-->
<!--                                        <h4>$11.99 <span>$15.00</span></h4>-->
<!--                                    </div>-->
<!--                                    <div class="snipcart-details top_brand_home_details">-->
<!--                                        <form action="#" method="post">-->
<!--                                            <fieldset>-->
<!--                                                <input type="hidden" name="cmd" value="_cart" />-->
<!--                                                <input type="hidden" name="add" value="1" />-->
<!--                                                <input type="hidden" name="business" value=" " />-->
<!--                                                <input type="hidden" name="item_name" value="basmati rise" />-->
<!--                                                <input type="hidden" name="amount" value="11.99" />-->
<!--                                                <input type="hidden" name="discount_amount" value="1.00" />-->
<!--                                                <input type="hidden" name="currency_code" value="USD" />-->
<!--                                                <input type="hidden" name="return" value=" " />-->
<!--                                                <input type="hidden" name="cancel_return" value=" " />-->
<!--                                                <input type="submit" name="submit" value="Add to cart" class="button" />-->
<!--                                            </fieldset>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 top_brand_left">-->
<!--                <div class="hover14 column">-->
<!--                    <div class="agile_top_brand_left_grid">-->
<!--                        <div class="agile_top_brand_left_grid_pos">-->
<!--                            <img src="img/offer.png" alt=" " class="img-responsive" />-->
<!--                        </div>-->
<!--                        <div class="agile_top_brand_left_grid1">-->
<!--                            <figure>-->
<!--                                <div class="snipcart-item block">-->
<!--                                    <div class="snipcart-thumb">-->
<!--                                        <a href="single.html"><img src="img/2.png" alt=" " class="img-responsive" /></a>-->
<!--                                        <p>Pepsi soft drink (2 Ltr)</p>-->
<!--                                        <h4>$8.00 <span>$10.00</span></h4>-->
<!--                                    </div>-->
<!--                                    <div class="snipcart-details top_brand_home_details">-->
<!--                                        <form action="#" method="post">-->
<!--                                            <fieldset>-->
<!--                                                <input type="hidden" name="cmd" value="_cart" />-->
<!--                                                <input type="hidden" name="add" value="1" />-->
<!--                                                <input type="hidden" name="business" value=" " />-->
<!--                                                <input type="hidden" name="item_name" value="Pepsi soft drink" />-->
<!--                                                <input type="hidden" name="amount" value="8.00" />-->
<!--                                                <input type="hidden" name="discount_amount" value="1.00" />-->
<!--                                                <input type="hidden" name="currency_code" value="USD" />-->
<!--                                                <input type="hidden" name="return" value=" " />-->
<!--                                                <input type="hidden" name="cancel_return" value=" " />-->
<!--                                                <input type="submit" name="submit" value="Add to cart" class="button" />-->
<!--                                            </fieldset>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 top_brand_left">-->
<!--                <div class="hover14 column">-->
<!--                    <div class="agile_top_brand_left_grid">-->
<!--                        <div class="agile_top_brand_left_grid_pos">-->
<!--                            <img src="img/offer.png" alt=" " class="img-responsive" />-->
<!--                        </div>-->
<!--                        <div class="agile_top_brand_left_grid1">-->
<!--                            <figure>-->
<!--                                <div class="snipcart-item block">-->
<!--                                    <div class="snipcart-thumb">-->
<!--                                        <a href="single.html"><img src="img/4.png" alt=" " class="img-responsive" /></a>-->
<!--                                        <p>dogs food (4 Kg)</p>-->
<!--                                        <h4>$9.00 <span>$11.00</span></h4>-->
<!--                                    </div>-->
<!--                                    <div class="snipcart-details top_brand_home_details">-->
<!--                                        <form action="#" method="post">-->
<!--                                            <fieldset>-->
<!--                                                <input type="hidden" name="cmd" value="_cart" />-->
<!--                                                <input type="hidden" name="add" value="1" />-->
<!--                                                <input type="hidden" name="business" value=" " />-->
<!--                                                <input type="hidden" name="item_name" value="dogs food" />-->
<!--                                                <input type="hidden" name="amount" value="9.00" />-->
<!--                                                <input type="hidden" name="discount_amount" value="1.00" />-->
<!--                                                <input type="hidden" name="currency_code" value="USD" />-->
<!--                                                <input type="hidden" name="return" value=" " />-->
<!--                                                <input type="hidden" name="cancel_return" value=" " />-->
<!--                                                <input type="submit" name="submit" value="Add to cart" class="button" />-->
<!--                                            </fieldset>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="clearfix"> </div>
        </div>
    </div>
</div>