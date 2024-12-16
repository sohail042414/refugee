<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\inlaw $model */
/** @var ActiveForm $form */
?>
<div class="user-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'refugee_number') ?>
        <?= $form->field($model, 'refugee_id') ?>
        <?= $form->field($model, 'relation') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'living_status') ?>
        <?= $form->field($model, 'current_address') ?>
        <?= $form->field($model, 'burial_address') ?>
        <?= $form->field($model, 'occupation') ?>
        <?= $form->field($model, 'cnic') ?>
        <?= $form->field($model, 'phone_number') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- user-index -->
