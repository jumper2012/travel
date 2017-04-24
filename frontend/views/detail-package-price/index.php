<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DetailPackagePriceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Package Prices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-package-price-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Package Price', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'detail_package_price_id',
            'tour_package_id',
            'service_name',
            'price',
            'descriptiom:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
