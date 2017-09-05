<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImGrnHeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage GRN';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-header">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=Url::base('')?>">Home</a></li>
        <li class="breadcrumb-item">Inventory</li>
        <li class="breadcrumb-item">
          <a href="<?= Url::toRoute(['/grn/grn-history']); ?>">
            GRN
          </a>
        </li>
        <li class="breadcrumb-item active"><?= Html::encode($this->title) ?></li>
      </ol>
     
      <div class="middle-menu-bar">
        <?= Html::a(Yii::t('app', 'GRN History'), ['/grn/grn-history'], ['class' => '']) ?>   
        <?= Html::a(Yii::t('app', 'Manage GRN'), ['/grn/manage-grn'], ['class' => '']) ?>    
        <?php
          echo \yii\helpers\Html::a( '<i class="icon md-arrow-left" aria-hidden="true"></i> Back', Yii::$app->request->referrer,['class' => 'back']);
        ?>    
      </div>
</div>


<div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">

      <header class="panel-heading">
        <div class="panel-actions"></div>
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
      </header>
     
      <div class="panel-body">

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [
                      'attribute' => 'grn_number',
                      'label' => 'GRN Number',
                      'format' => 'raw',
                      'value' => function ($model) {

                        if($model->status == 'open'){
                        
                          return Html::a($model->grn_number, ['grn/create-grn', 'po' => isset($model->ppPurchaseHead)?$model->ppPurchaseHead->po_order_number:'','grn' => $model->grn_number]);
                        
                        }else{
                          return Html::a($model->grn_number, ['grn/view', 'id' => $model->id]);
                        }

                      },
                    ],
                    [
                      'attribute' => 'pp_purchase_head_id',
                      'label' => 'Purchase Order No',
                      'format' => 'raw',
                      'value' => function ($model) {
                          return isset($model->ppPurchaseHead)?$model->ppPurchaseHead->po_order_number:'';
                      },
                    ],
                    'date',
                    [
                      'attribute' => 'supplier_id',
                      'label' => 'Supplier',
                      'format' => 'raw',
                      'value' => function ($model) {
                          return isset($model->supplier)?$model->supplier->supplier_code:'';
                      },
                    ],
                    [
                      'attribute' => 'branch_id',
                      'label' => 'Branch',
                      'format' => 'raw',
                      'value' => function ($model) {
                          return isset($model->branch)?$model->branch->title:'';
                      },
                    ],
                    
                    [
                      'attribute' => 'status',
                      'label' => 'Status',
                      'value' => function ($model){
                        return ucfirst($model->status);
                      }
                    ],

                     [
                    'header' => 'Action',
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{confirm_grn}',
                    'buttons' => [
                      
                        'confirm_grn' => function ($url, $model) {
                              return $model->status == 'open'?Html::a('<span class="glyphicon glyphicon-open-file" title="Confirm GRN"></span>', ['grn/confirm-grn', 'id' => $model->id], ["data-pjax" => 0, 'onClick' => 'return confirm("Are you sure you want to Confirm this GRN?") ']):'';
                          },
                      
                    ],
                ],
                ],
            ]); ?>

      </div>

    </div>
</div>    
