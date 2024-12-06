<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Children $model */
/** @var ActiveForm $form */
?>
<div class="Children-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'date_of_birth') ?>
        <?= $form->field($model, 'education') ?>
        <?= $form->field($model, 'refugee_number') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'occupation') ?>
        <?= $form->field($model, 'disability') ?>
        <?= $form->field($model, 'educational_institution_year') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Children-index -->
