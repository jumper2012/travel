<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailAccount */

$this->title = 'Update Detail Account: ' . ' ' . $model->detail_account_id;
$this->params['breadcrumbs'][] = ['label' => 'Detail Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detail_account_id, 'url' => ['view', 'id' => $model->detail_account_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
