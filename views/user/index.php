<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Job $model */
/** @var ActiveForm $form */
?>
<div class="user-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'job_type') ?>
        <?= $form->field($model, 'refugee_id') ?>
        <?= $form->field($model, 'relation') ?>
        <?= $form->field($model, 'other_details') ?>
        <?= $form->field($model, 'department') ?>
        <?= $form->field($model, 'date_of_employment') ?>
        <?= $form->field($model, 'designation') ?>
        <?= $form->field($model, 'grade') ?>
        <?= $form->field($model, 'salary') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- user-index -->
