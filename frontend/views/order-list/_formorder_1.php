<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\OrderList */
/* @var $form yii\widgets\ActiveForm */

$session = Yii::$app->session;

$start = $session['start'];
$end = $session['end'];

//echo $session['idtravel'];
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
    <?php $form = ActiveForm::begin(); ?>

    <?php
    // Usage with model (with no default initial value)
    echo '<label class="control-label">Arrival Date</label>';
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'arrival_date',
        'options' => ['placeholder' => 'Enter birth date ...'],
        'pluginOptions' => [
            'autoclose' => true,
            'startDate' => date($start),
            'endDate' => date($end),
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    
    ?>
        <H5><b>Select Package</b></H5>
        <form>
            Child:
            <select id="child" onchange="myFunction()">
                <option>0</option>
                <option>1</option>
                <option>2</option>  
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
    
            Adult:
            <select id="adult" onchange="myFunction()">
                <option>0</option>
                <option>1</option>
                <option>2</option>  
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
    
            <font color="red"><p><b>Total: <a type="text" id="demo" size="20"></a></b></p></font>
        </form>
    
        <script type="text/javascript" src="js/jquery_1.7.1_min.js"></script> 
        <script type="text/javascript">
                function myFunction() {
                    var mylistchild = document.getElementById("child");
                    var mylistadult = document.getElementById("adult");
                    var child = <?php echo json_encode($price[0]); ?>;
                    var adult = <?php echo json_encode($price[1]); ?>;
    
                    child = child * parseInt(mylistchild.options[mylistchild.selectedIndex].text);
                    adult = adult * parseInt(mylistadult.options[mylistadult.selectedIndex].text);
                    var result = adult + child;
                    document.getElementById("demo").innerHTML = 'Rp.' + result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
                    return result;
                }
    
        </script>
        
        <?php 
            echo "<script>document.writeln(result);</script>";
//            die();
        ?>
<!--    <H5><b>Select Package</b></H5>
    <form>
        <?php foreach ($sql as $data): ?>
            <br/>
            <?php echo $data['service_name'] ?>
            <br/>
            <select id="<?php echo $data['service_name'] ?>" number="3" onchange="myFunction()">
                <option>0</option>
                <option>1</option>
                <option>2</option>  
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        <?php endforeach;
        ?>
    </form>

    <p>Total: <a type="text" id="demo" size="20"></a></p>

    <script type="text/javascript" src="js/jquery_1.7.1_min.js"></script> 
    <script type="text/javascript">
            <?php $_SESSION['sqlcount'] = "0";
                    $indexnya = $session['sqlcount'];
            ?>
            function myFunction() {
                <?php echo "var count = '" . $sqlCount . "'"; ?>
                
                var text = [];
                var i;
                for (i = 0; i < count; i++) {
                    text[i] =  <?php echo json_encode($nama[$indexnya]); ?>;
                    <?php $_SESSION['sqlcount'] = $indexnya+1?>
                    document.write(i);
                    document.write(<?php echo json_encode($indexnya); ?>);
                }                
                var mylistchild = document.getElementById("child");
                var mylistadult = document.getElementById("adult");
                var child = 150000;
                var adult = 250000;
                document.write(text[0]);
                document.write(text[1]);
                child = child * parseInt(mylistchild.options[mylistchild.selectedIndex].text);
                adult = adult * parseInt(mylistadult.options[mylistadult.selectedIndex].text);
                var result = adult + child;
                document.getElementById("demo").innerHTML = 'Rp.' + result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");

                return result;
            }

    </script>-->

    <?= $form->field($model, 'special_request')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_price')->textInput(['value' => '10']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
