<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Game */

$this->title = 'Add New Travel Package';
$this->params['breadcrumbs'][] = ['label' => 'Games', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="game-create">
                <br>
                <div id="akord">
                    <div class="panel-info">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#akord" href="#collapseRequest"><?= Html::encode($this->title) ?></a>
                            </h4>
                        </div>
                    </div>	
                    <div id="collapseRequest" class="panel-collapse collapse <?php if (!isset($filled)) echo 'in'; ?>">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-7">

                                    <?=
                                    $this->render('_addnewtravelpackageform', [
                                        'model' => $model,
                                        'modelsAddress' => (empty($modelsAddress)) ? [new \common\models\DetailPackagePrice] : $modelsAddress
                                    ])
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>

        </div>
    </div>
</section>
