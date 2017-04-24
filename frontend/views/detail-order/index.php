<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DetailOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'detail_order_id',
            'order_id',
            'detail_package_price_id',
            'count',
            'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
