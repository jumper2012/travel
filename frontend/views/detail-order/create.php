<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailOrder */

$this->title = 'Create Detail Order';
$this->params['breadcrumbs'][] = ['label' => 'Detail Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
