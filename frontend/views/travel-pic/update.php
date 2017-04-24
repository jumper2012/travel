<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPic */

$this->title = 'Update Travel Pic: ' . ' ' . $model->travel_pic_id;
$this->params['breadcrumbs'][] = ['label' => 'Travel Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->travel_pic_id, 'url' => ['view', 'id' => $model->travel_pic_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="travel-pic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
