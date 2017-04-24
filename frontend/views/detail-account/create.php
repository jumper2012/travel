<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailAccount */

$this->title = 'Create Detail Account';
$this->params['breadcrumbs'][] = ['label' => 'Detail Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-account-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
