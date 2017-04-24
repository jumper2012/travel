<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model common\models\OrderList */
/* @var $form yii\widgets\ActiveForm */
$session = Yii::$app->session;

$start = $session['start'];
$end = $session['end'];
?>

<div class="order-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    // Usage with model (with no default initial value)
    echo '<label class="control-label">Arrival Date</label>';
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'arrival_date',
        'options' => ['placeholder' => 'Enter arrival date ...'],
        'pluginOptions' => [
            'autoclose' => true,
            'startDate' => date($start),
            'endDate' => date($end),
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'special_request')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'total_price')->widget(MaskMoney::classname(), [
        'pluginOptions' => [
        'prefix' => 'Rp ',
        'allowNegative' => false
    ]
]);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
