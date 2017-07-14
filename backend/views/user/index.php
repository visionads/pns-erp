<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-header">
      <h1 class="page-title"><?= Html::encode($this->title) ?></h1>
     
      <div class="page-header-actions">
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-sm btn-primary btn-round']) ?>        
      </div>
</div>

<div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
     
    <div class="panel-body">

        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',

           [
    'class' => 'yii\grid\ActionColumn',
    'visibleButtons' => [
        'view' => function ($model, $key, $index) {
            return $model->status === 1 ? false : true;
         }
    ]
]
        ],
    ]); ?>

           


    </div>

</div>

