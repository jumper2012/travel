<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TravelPicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Travel Pics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-pic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Travel Pic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'travel_pic_id',
            'travel_package_id',
            'pic_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
