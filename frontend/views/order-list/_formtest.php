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

$sql = common\models\DetailPackagePrice::findBySql("select * from detail_package_price where tour_package_id=" . $session['idtravel'])->all();
$sqlCount = common\models\DetailPackagePrice::findBySql("select * from detail_package_price where tour_package_id=" . $session['idtravel'])->count();
$count = 0;
foreach ($sql as $detail) {
    $nama[$count] = $detail['service_name'];
    $price[$count] = $detail['price'];
    $count++;
}

?>


<div class="order-list-form">

    <script>
        var p1 = "20000";
    </script>

    <?php
//        echo "<script>document.writeln(p1);</script>";
//        $nilai = "<script>document.writeln(p1);</script>;";
//        echo $nilai;
    ?>

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
    
    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
