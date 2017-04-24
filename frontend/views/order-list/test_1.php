<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
            var test = 1000;
            var mylistchild = document.getElementById("child");
            var mylistadult = document.getElementById("adult");
            var child = <?php echo json_encode($price[0]); ?>;
            var adult = <?php echo json_encode($price[1]); ?>;

            child = child * parseInt(mylistchild.options[mylistchild.selectedIndex].text);
            adult = adult * parseInt(mylistadult.options[mylistadult.selectedIndex].text);
            var result = adult + child;
            document.getElementById("demo").innerHTML = 'Rp.' + result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
            document.getElementById("demo1").value=result;
//            document.form1.media.value = result;
//            return result;
            var test = 200000;
            document.getElementByID("test").value = test;
        }
        
</script>

<form method="get" action="index.php?r=travel-package%2Fdetail&id=1">
    <input id="test" name="test" visibility="hidden"></input>
    <input type="submit" value="Click me!"></input>
</form>

<?php
    
?>




