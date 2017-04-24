<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailOrder */

$this->title = $model->detail_order_id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->detail_order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->detail_order_id], [
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
            'detail_order_id',
            'order_id',
            'detail_package_price_id',
            'count',
            'price',
        ],
    ]) ?>

</div>
