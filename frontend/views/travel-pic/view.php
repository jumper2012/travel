<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPic */

$this->title = $model->travel_pic_id;
$this->params['breadcrumbs'][] = ['label' => 'Travel Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-pic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->travel_pic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->travel_pic_id], [
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
            'travel_pic_id',
            'travel_package_id',
            'pic_name',
        ],
    ]) ?>

</div>
