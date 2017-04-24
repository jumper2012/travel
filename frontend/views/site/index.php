<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

//AppAsset::register($this);
$asset = frontend\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

$var = $_POST(['test']);
echo $var;
?>
<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">

                            <img data-seq src="../../common/picture/gameBanner.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq></span>                
                            <h2 data-seq></h2>                
                            <p data-seq></p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>

                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="../../common/picture/gameBanner.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 40% Off</span>                
                            <h2 data-seq>Wristwatch Collection</h2>                
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="../../common/picture/gameBanner.jpg" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>                
                            <h2 data-seq>Jeans Collection</h2>                
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->           
                    <li>
                        <div class="seq-model">
                            <img data-seq src="../../common/picture/gameBanner.jpg" alt="Shoes slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>                
                            <h2 data-seq>Exclusive Shoes</h2>                
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->  
                    <li>
                        <div class="seq-model">
                            <img data-seq src="../../common/picture/gameBanner.jpg" alt="Male Female slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 50% Off</span>                
                            <h2 data-seq>Best Collection</h2>                
                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>                   
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<br>
<br>
<div class="col-lg-5"></div>
<div class="col-lg-5">
    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Learn More</a> OR
    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Sign Up +1</a>
</div>

<!-- / slider -->

<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Popular</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->

                                        //<?php
//                                        $model = common\models\Game::findBySql("select * from game")->all();
//                                        foreach ($model as $temp):
//                                            //$count++;
//                                            ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="<?php //echo Yii::getAlias('../../common/gameicon/') . $temp->game_icon; ?>" alt="polo shirt img" height="250px" weight="300px"></a>

                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#"><?php // $temp->game_name ?></a></h4>
                                                        <left>
                                                            <span><?php
//                                                                $genreMdl = common\models\Genre::findBySql("select * from genre where genre_id=" . $temp->genre_id)->all();
//                                                                foreach ($genreMdl as $value) {
//
//                                                                    echo Html::a(
//                                                                            $value->genre_name, ['/game/detail', 'id' => $temp->game_id], ['data-method' => 'post', 'class' => 'hidden-xs']
//                                                                    );
//                                                                }
                                                                ?></span>
                                                        </left>

                                                    </figcaption>
                                                </figure>                         

                                            </li> 
                                            <?php
                                       // endforeach;
                                        ?>

                                    </ul>
                                    <?= Html::a('Browse all Product <span class="fa fa-long-arrow-right"></span>', ['/game/index'], ['class' => 'aa-browse-btn']) ?>
                                </div>
                                <!-- / men product category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section -->


<!-- Products section2 -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Popular</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->

                                        <?php
//                                        $model = common\models\Game::findBySql("select * from game where release_id=2")->all();
//                                        foreach ($model as $temp):
                                            //$count++;
                                            ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img src="<?php //echo Yii::getAlias('../../common/gameicon/') . $temp->game_icon; ?>" alt="polo shirt img" height="250px" weight="300px"></a>

                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#"><?php //echo $temp->game_name ?></a></h4>
                                                        <left>
                                                            <span><?php
//                                                                $genreMdl = common\models\Genre::findBySql("select * from genre where genre_id=" . $temp->genre_id)->all();
//                                                                foreach ($genreMdl as $value) {
//
//                                                                    echo Html::a(
//                                                                            $value->genre_name, ['/game/detail', 'id' => $temp->game_id], ['data-method' => 'post', 'class' => 'hidden-xs']
//                                                                    );
//                                                                }
                                                                ?></span>
                                                        </left>

                                                    </figcaption>
                                                </figure>                         

                                            </li> 
                                            <?php
                                       // endforeach;
                                        ?>

                                    </ul>
                                    <?= Html::a('Browse all Product <span class="fa fa-long-arrow-right"></span>', ['/game/index'], ['class' => 'aa-browse-btn']) ?>
                                </div>
                                <!-- / men product category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section2 -->



<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Subscribe our newsletter </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" id="" placeholder="Enter your Email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->