<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DetailAccountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detail Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-account-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detail Account', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'detail_account_id',
            'account_id',
            'first_name',
            'last_name',
            'email:email',
            // 'telepon',
            // 'date_of_birth',
            // 'country_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
