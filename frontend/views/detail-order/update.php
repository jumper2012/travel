<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailOrder */

$this->title = 'Update Detail Order: ' . ' ' . $model->detail_order_id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detail_order_id, 'url' => ['view', 'id' => $model->detail_order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
