<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */
/** @var ActiveForm $form */
?>
<div class="spouse-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'wife_first_name') ?>
        <?= $form->field($model, 'wife_second_name') ?>
        <?= $form->field($model, 'cnic') ?>
        <?= $form->field($model, 'refugee_number') ?>
        <?= $form->field($model, 'date_of_nikah') ?>
        <?= $form->field($model, 'local_or_migrant') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- spouse-index -->
