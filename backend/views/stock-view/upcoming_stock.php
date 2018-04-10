<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImGrnDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $data;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-header">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=Url::base('')?>">Home</a></li>
        <li class="breadcrumb-item">Inventory</li>
                <li class="breadcrumb-item active"><?= Html::encode($this->title) ?></li>
      </ol>
     
      <div class="middle-menu-bar">
          
        <?php
          echo \yii\helpers\Html::a( '<i class="icon md-arrow-left" aria-hidden="true"></i> Back', Yii::$app->request->referrer,['class' => 'back']);
        ?>    
      </div>
</div>

<div class="page-content">


    <!-- Panel Basic -->
    <div class="panel">
       

      <div class="panel-body">

        

        <div class="table-responsive">

          
          <?=ucfirst($data)?> data are coming
           

        </div>
          
      </div>

    </div>
    
</div>     
<style type="text/css">
    b{
        font-weight: 700;
    }

    .table tr td{
      height: 70px;
    }
</style>