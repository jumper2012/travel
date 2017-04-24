<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPackage */

$this->title = 'Update Travel Package: ' . ' ' . $model->travel_package_id;
$this->params['breadcrumbs'][] = ['label' => 'Travel Packages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->travel_package_id, 'url' => ['view', 'id' => $model->travel_package_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="travel-package-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
