<?php
	use yii\helpers\Url;
	use yii\helpers\Html;

	$this->title = Yii::t('app', 'General Ladger Report');
	$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-header">

      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=Url::base('')?>">Home</a></li>
        <li class="breadcrumb-item active"><?=$this->title?></li>
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

      <header class="panel-heading">
        <div class="panel-actions"></div>
        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
      </header>
     
	    <div class="panel-body">

	    	<div class="setting-column">
	    		
	    		<a href="<?= Url::toRoute(['/report/consolidated-trial-balance']); ?>" class="btn btn-block btn-primary waves-effect">Consolidated Trial Balance</a>
	    		<a href="<?= Url::toRoute(['/report/trial-balance-for-aLL']); ?>" class="btn btn-block btn-primary waves-effect">Trial Balance for ALL</a>
          <a href="<?= Url::toRoute(['/report/chart-of-account-list']); ?>" class="btn btn-block btn-primary waves-effect">Chart of Account List</a>
          <a href="<?= Url::toRoute(['/report/journal-transaction']); ?>" class="btn btn-block btn-primary waves-effect">Journal Transaction</a>
	    		
	    	</div>

        <div class="setting-column">
          
          <a href="<?= Url::toRoute(['/report/balance-sheet']); ?>" class="btn btn-block btn-primary waves-effect">Balance Sheet</a>
          <a href="<?= Url::toRoute(['/report/profit-loss']); ?>" class="btn btn-block btn-primary waves-effect">Profit & Loss</a>
          
        </div>

	    </div>
	</div>
</div>	    

