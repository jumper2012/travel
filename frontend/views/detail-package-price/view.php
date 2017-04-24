<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPackagePrice */

$this->title = $model->detail_package_price_id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Package Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-package-price-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->detail_package_price_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->detail_package_price_id], [
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
            'detail_package_price_id',
            'tour_package_id',
            'service_name',
            'price',
            'descriptiom:ntext',
        ],
    ]) ?>

</div>
