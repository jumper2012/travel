<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailPackagePrice */

$this->title = 'Create Detail Package Price';
$this->params['breadcrumbs'][] = ['label' => 'Detail Package Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-package-price-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
