<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use yii\helpers\Url;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model common\models\Game */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'travel_package_name')->textInput(['maxlength' => true]) ?>
    
    <?php
    echo $form->field($model, 'city_id')->dropDownList(
            ArrayHelper::map(common\models\City::find()->all(), 'city_id', 'city_name'), ['prompt' => '--City--']
    )
    ?> 

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
    <br>
    <?php
    echo $form->field($model, 'pic_name[]')->widget(kartik\file\FileInput::classname(), [
        'options' => ['multiple' => true],
        'pluginOptions' => ['previewFileType' => 'any']
    ]);
    ?>
    <br>


    <?php
    DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelsAddress[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'service_name',
            'price',
            'descriptiom',
        ],
    ]);
    ?>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-download-alt"></i> Detail Travel Package Price
                <button type="button" class="add-item btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
            </h4>
        </div>
        <div class="panel-body">
            <div class="container-items"><!-- widgetBody -->
                <?php foreach ($modelsAddress as $i => $modelAddress): ?>
                    <div class="item panel panel-default"><!-- widgetItem -->
                        <div class="panel-heading">
                            <h4 class="panel-title pull-left">Add new price</h4>
                            <div class="pull-right">
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                            // necessary for update action.
                            if (!$modelAddress->isNewRecord) {
                                echo Html::activeHiddenInput($modelAddress, "[{$i}]id");
                            }
                            ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?= $form->field($model, "[{$i}]service_name")->textInput(['maxlength' => true]) ?>

                                </div>
                                <div class="col-sm-9">
                                    <?= $form->field($modelAddress, "[{$i}]price")->textInput() ?>
                                </div>
                                
                                <div>
                                     <?= $form->field($modelAddress, "[{$i}]descriptiom")->textarea(['maxlength' => true]) ?>
                                </div>
                            </div><!-- .row -->

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><!-- .panel -->
    <?php DynamicFormWidget::end(); ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
