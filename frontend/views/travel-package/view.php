<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPackage */

$this->title = $model->travel_package_id;
$this->params['breadcrumbs'][] = ['label' => 'Travel Packages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-package-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->travel_package_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->travel_package_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'travel_package_id',
            'travel_package_name',
            'city_id',
            'total_price',
            'minimum_person',
            'duration',
            'quick_break',
            'running_periode_start',
            'running_periode_end',
            'book_until',
            'description:ntext',
            'agenda:ntext',
            'detail:ntext',
            'maps:ntext',
            'room:ntext',
            'prepare:ntext',
            'terms:ntext',
        ],
    ]) ?>

</div>
