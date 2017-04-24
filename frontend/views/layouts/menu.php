<?php
use yii\helpers\Html;
?>
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>          
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <?php
                            echo Html::a(
                                    'Packages', ['/travel-package/browseall']
                            );
                            ?>
                        </li>
                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>       
    </div>
</section>
<!-- / menu -->