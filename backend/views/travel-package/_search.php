<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TravelPackageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travel-package-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'travel_package_id') ?>

    <?= $form->field($model, 'travel_package_name') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'total_price') ?>

    <?= $form->field($model, 'minimum_person') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'quick_break') ?>

    <?php // echo $form->field($model, 'running_periode_start') ?>

    <?php // echo $form->field($model, 'running_periode_end') ?>

    <?php // echo $form->field($model, 'book_until') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'agenda') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'maps') ?>

    <?php // echo $form->field($model, 'room') ?>

    <?php // echo $form->field($model, 'prepare') ?>

    <?php // echo $form->field($model, 'terms') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
