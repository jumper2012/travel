<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\OrderListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'tour_package_id',
            'arrival_date',
            'departure_date',
            'account_id',
            // 'special_request:ntext',
            // 'total_price',
            // 'order_code',
            // 'proof_of_payment',
            // 'status_verificatio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
