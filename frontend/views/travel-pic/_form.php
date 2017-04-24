<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TravelPic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="travel-pic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'travel_package_id')->textInput() ?>

    <?= $form->field($model, 'pic_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
