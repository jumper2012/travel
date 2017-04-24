<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Province */

$this->title = $model->province_id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->province_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->province_id], [
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
            'province_id',
            'country_id',
            'province_name',
        ],
    ]) ?>

</div>
