<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Gogo */

$this->title = 'Create Gogo';
$this->params['breadcrumbs'][] = ['label' => 'Gogos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gogo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
