<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */
/** @var ActiveForm $form */
?>
<div class="test-form_home">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'father') ?>
        <?= $form->field($model, 'birth_date') ?>
        <?= $form->field($model, 'cnic') ?>
        <?= $form->field($model, 'refugee_no') ?>
        <?= $form->field($model, 'marital_status') ?>
        <?= $form->field($model, 'phone_no') ?>
        <?= $form->field($model, 'education') ?>
        <?= $form->field($model, 'caste') ?>
        <?= $form->field($model, 'temporary_address') ?>
        <?= $form->field($model, 'permanent_address') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- test-form_home -->
