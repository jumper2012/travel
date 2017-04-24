<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPackage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travel-package-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'travel_package_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'total_price')->textInput() ?>

    <?= $form->field($model, 'minimum_person')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quick_break')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'running_periode_start')->textInput() ?>

    <?= $form->field($model, 'running_periode_end')->textInput() ?>

    <?= $form->field($model, 'book_until')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'agenda')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'maps')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'room')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prepare')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'terms')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
