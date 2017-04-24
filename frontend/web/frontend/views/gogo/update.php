<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gogo */

$this->title = 'Update Gogo: ' . $model->id_gogo;
$this->params['breadcrumbs'][] = ['label' => 'Gogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_gogo, 'url' => ['view', 'id' => $model->id_gogo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gogo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
