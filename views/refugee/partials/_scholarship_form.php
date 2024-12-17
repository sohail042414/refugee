<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models;

/** @var yii\web\View $this */
/** @var ActiveForm $form */
?>
<div class="card">

    <div class="card-header">
        <h2>Add Scholarship Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-scholarship">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'refugee_id') ?>
                    <?= $form->field($model, 'details') ?>
                    <?= $form->field($model, 'head_of_family') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'student_name') ?>
                    <?= $form->field($model, 'scholarship') ?>
                    <?= $form->field($model, 'p_type') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'institution') ?>
                    <?= $form->field($model, 'year') ?>
                    <?= $form->field($model, 'self') ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Save and Continue', [
                        'class' => 'btn btn-success',
                        'name' => 'save',
                    ]) ?>
                    <?= Html::submitButton('Save and Next', [
                        'class' => 'btn btn-primary',
                        'name' => 'next',
                        'value' => 'next',
                    ]) ?>
                </div>
                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

