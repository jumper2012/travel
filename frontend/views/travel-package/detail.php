<?php

use yii\helpers\Html;

?>
<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->

                            <div class="col-md-7 col-sm-7 col-xs-12">                              
                                <div class="aa-product-view-slider">                                
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <?php
                                            //use Travel icon  Model
                                            foreach ($travelicon as $travelpicval):
                                                ?>
                                                <div class="simpleLens-big-image-container"><a data-lens-image="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" class="simpleLens-lens-image"><img src="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" class="simpleLens-big-image"></a></div>

                                                <?php
                                            endforeach;
                                            ?>

                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <?php
                                            //use Travel pic Model
                                            foreach ($travelpicMdl as $travelpicval):
                                                ?>
                                                <a data-big-image="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" data-lens-image="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" class="simpleLens-thumbnail-wrapper" href="#">
                                                    <img src="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" width="25px" height="25px">
                                                </a>                                    

                                                <?php
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            //use Travel icon  Model
                            foreach ($model as $travelpackageval):
                                ?>

                                <!-- Modal view content -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3><b><?php echo $travelpackageval->travel_package_name ?></b></h3>
                                        <hr></hr>
                                        <table width="100%">
                                            <tr height="30">
                                                <th colspan="2">Price From</th>
                                            </tr>
                                            <tr height="30">
                                                <td colspan="2"><?php echo ' ' . number_format($travelpackageval->total_price, "2", ",", ".") ?><b><font color="red"> PER PERSON</font></b></td>
                                            </tr>
                                            <tr>
                                                <th height="30">Minimum Person</th>
                                                <th height="30">Duration</th>
                                            </tr>
                                            <tr>
                                                <td height="30">
                                                    <?php echo $travelpackageval->minimum_person ?>
                                                </td>
                                                <td height="30">
                                                    <?php echo $travelpackageval->duration ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" height="30"><?php echo $travelpackageval->travel_package_name ?></th>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="30"><?php echo $travelpackageval->quick_break ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" height="30">Running Period</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2" height="30"><?php echo date("d F Y", strtotime($travelpackageval->running_periode_start)) . " - " . date("d F Y", strtotime($travelpackageval->running_periode_end)) ?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Book Until</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo date("d F Y", strtotime($travelpackageval->book_until)); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <!--                        <div class="aa-product-details-bottom">-->
                                        <ul class="nav nav-tabs" id="myTab2">
                                            <li><a href="#description" data-toggle="tab">Description</a></li>
                                            <li><a href="#agenda" data-toggle="tab">Agenda</a></li>  
                                            <li><a href="#details" data-toggle="tab">Details</a></li>
                                            <li><a href="#maps" data-toggle="tab">Maps</a></li> 
                                            <li><a href="#room" data-toggle="tab">Room</a></li>
                                            <li><a href="#prepare" data-toggle="tab">Prepare</a></li> 
                                            <li><a href="#terms" data-toggle="tab">Terms</a></li> 
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="description">
                                                <?php echo $travelpackageval->description ?>
                                            </div>
                                            <div class="tab-pane fade " id="agenda">
                                                <?php echo $travelpackageval->agenda ?>
                                            </div>  
                                            <div class="tab-pane fade " id="details">
                                                <?php echo $travelpackageval->detail ?>
                                            </div> 
                                            <div class="tab-pane fade " id="maps">
                                                <?php echo $travelpackageval->maps ?>
                                            </div> 
                                            <div class="tab-pane fade " id="room">
                                                <?php echo $travelpackageval->room ?>
                                            </div> 
                                            <div class="tab-pane fade " id="prepare">
                                                <?php echo $travelpackageval->prepare ?>
                                            </div> 
                                            <div class="tab-pane fade " id="terms">
                                                <?php echo $travelpackageval->terms ?>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-5 col-sm-5 col-xs-12">
                                     <div class="aa-product-view-content">
                                         <?php echo $this->render('../order-list/test');?>
                                         <?php echo $this->render('../order-list/create', ['model' => $modelorder],['modelp' => $model]); ?>
                                     </div>
                                  </div>

                            </div>
                        </div>

                        <?php
                        //end for travel package data
                    endforeach;
                    ?>

                    <!-- Related product -->
                    <div class="aa-product-related-item">
                        <h3>Related Products</h3>
                        <ul class="aa-product-catg aa-related-item-slider">
                            <!-- start single product item -->
                            <?php
                            foreach ($travelpackageMdl as $travelpackaeval):
                                ?>
                                <li>
                                    <figure>
                                        <?php
                                        $travelpicMdl = common\models\TravelPic::findBySql('SELECT * FROM travel_pic WHERE travel_package_id=' . $travelpackaeval->travel_package_id . ' LIMIT 1')->all();
                                        foreach ($travelpicMdl as $travelpicval):
                                            ?>
                                            <a class="aa-product-img" href="#"><img src="<?php echo Yii::getAlias('../../common/travelpackagepic/') . $travelpicval->pic_name; ?>" alt="<?php echo $travelpackaeval->travel_package_name; ?>" height="250px" weight="300px"></a>
                                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#"><?php echo $travelpackaeval->travel_package_name ?></a></h4>
                                                <span class="aa-product-price">IDR<?php echo ' ' . number_format($travelpackaeval->total_price, "2", ",", "."); ?></span>
                                            </figcaption>
                                        </figure>                         
                                        <div class="aa-product-hvr-content">
                                            <?php
                                            echo Html::a('Lihat Detail', ['/travel-package/detail', 'id' => $travelpackaeval->travel_package_id], ['data-method' => 'post', 'class' => 'hidden-xs']);
                                            ?>
                                            <br>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                                        </div>
                                        <!-- product badge -->
                                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                                    </li>
                                    <?php
                                endforeach;
                            endforeach;
                            ?>                                                                                
                        </ul>
                        <!-- quick view modal -->                  
                        <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">                      
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <div class="row">
                                            <!-- Modal view slider -->
                                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                                                <div class="aa-product-view-slider">                                
                                                    <div class="simpleLens-gallery-container" id="demo-1">
                                                        <div class="simpleLens-container">
                                                            <div class="simpleLens-big-image-container">
                                                                <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                    <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="simpleLens-thumbnails-container">
                                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                               data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                               data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                            </a>                                    
                                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                               data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                               data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                            </a>

                                                            <a href="#" class="simpleLens-thumbnail-wrapper"
                                                               data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                               data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal view content -->
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="aa-product-view-content">
                                                    <h3>T-Shirt</h3>
                                                    <div class="aa-price-block">
                                                        <span class="aa-product-view-price">$34.99</span>
                                                        <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                                    <h4>Size</h4>
                                                    <div class="aa-prod-view-size">
                                                        <a href="#">S</a>
                                                        <a href="#">M</a>
                                                        <a href="#">L</a>
                                                        <a href="#">XL</a>
                                                    </div>
                                                    <div class="aa-prod-quantity">
                                                        <form action="">
                                                            <select name="" id="">
                                                                <option value="0" selected="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="2">3</option>
                                                                <option value="3">4</option>
                                                                <option value="4">5</option>
                                                                <option value="5">6</option>
                                                            </select>
                                                        </form>
                                                        <p class="aa-prod-category">
                                                            Category: <a href="#">Polo T-Shirt</a>
                                                        </p>
                                                    </div>
                                                    <div class="aa-prod-view-bottom">
                                                        <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                        <!-- / quick view modal -->   
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / product category -->


