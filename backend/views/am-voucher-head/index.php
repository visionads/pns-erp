<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AmVoucherHeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Am Voucher Heads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="am-voucher-head-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Am Voucher Head', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'voucher_number',
            'date',
            'reference',
            'year',
            // 'period',
            // 'branch_id',
            // 'note:ntext',
            // 'status',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
