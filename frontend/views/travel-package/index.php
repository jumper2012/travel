<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TravelPackageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Travel Packages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-package-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Travel Package', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'travel_package_id',
            'travel_package_name',
            'city_id',
            'total_price',
            'minimum_person',
            // 'duration',
            // 'quick_break',
            // 'running_periode_start',
            // 'running_periode_end',
            // 'book_until',
            // 'description:ntext',
            // 'agenda:ntext',
            // 'detail:ntext',
            // 'maps:ntext',
            // 'room:ntext',
            // 'prepare:ntext',
            // 'terms:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
