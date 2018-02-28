<?php
	use yii\helpers\Url;	
	use yii\helpers\Html;

	$this->title = Yii::t('app', 'Total Due');
	$this->params['breadcrumbs'][] = $this->title;
?>


<div class="page-header">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=Url::base('')?>">Home</a></li>
        <li class="breadcrumb-item">Report</li>
                <li class="breadcrumb-item active"><?= Html::encode($this->title) ?></li>
      </ol>
     
      <div class="middle-menu-bar">

      	<a class="white"><?=isset($label)?$label:'';?></a>
          
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

        			Data is coming ... ... ...

        	</div>

        </div>	


    </div>

</div>