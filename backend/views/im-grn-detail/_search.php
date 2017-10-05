<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ImGrnDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="im-grn-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'im_grn_head_id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'batch_number') ?>

    <?= $form->field($model, 'expire_date') ?>

    <?php // echo $form->field($model, 'receive_quantity') ?>

    <?php // echo $form->field($model, 'cost_price') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'row_amount') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
