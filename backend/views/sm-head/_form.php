<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SmHead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sm-head-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sm_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'doc_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_id')->textInput() ?>

    <?= $form->field($model, 'am_coa_id')->textInput() ?>

    <?= $form->field($model, 'check_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'exchange_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tax_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prime_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'net_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_voucher_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save Changes' : 'Save Changes', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
