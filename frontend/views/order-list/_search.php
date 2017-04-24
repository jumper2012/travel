<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\OrderListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'tour_package_id') ?>

    <?= $form->field($model, 'arrival_date') ?>

    <?= $form->field($model, 'departure_date') ?>

    <?= $form->field($model, 'account_id') ?>

    <?php // echo $form->field($model, 'special_request') ?>

    <?php // echo $form->field($model, 'total_price') ?>

    <?php // echo $form->field($model, 'order_code') ?>

    <?php // echo $form->field($model, 'proof_of_payment') ?>

    <?php // echo $form->field($model, 'status_verificatio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
