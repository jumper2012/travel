<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TravelPackage */

$this->title = 'Create Travel Package';
$this->params['breadcrumbs'][] = ['label' => 'Travel Packages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="travel-package-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
