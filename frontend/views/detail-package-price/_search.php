<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\DetailPackagePriceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-package-price-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'detail_package_price_id') ?>

    <?= $form->field($model, 'tour_package_id') ?>

    <?= $form->field($model, 'service_name') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'descriptiom') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
