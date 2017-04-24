<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPackagePrice */

$this->title = 'Update Detail Package Price: ' . ' ' . $model->detail_package_price_id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Package Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detail_package_price_id, 'url' => ['view', 'id' => $model->detail_package_price_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-package-price-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
