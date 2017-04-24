<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gogos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gogo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gogo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_gogo',
            'detail_gogo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
