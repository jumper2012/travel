<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TravelPic */

$this->title = 'Create Travel Pic';
$this->params['breadcrumbs'][] = ['label' => 'Travel Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-pic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
