<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FamilyMember $model */
/** @var ActiveForm $form */
?>

<div class="card">

    <div class="card-header">
        <h2>Add Job Data</h2>
    </div>

    <div class="card-body">
<div class="refugee-job">

<h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'job_type') ?>
        <?= $form->field($model, 'refugee_id') ?>
        <?= $form->field($model, 'relation') ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'other_details') ?>
        <?= $form->field($model, 'department') ?>
        <?= $form->field($model, 'date_of_employment')->textInput(['type' => 'date']) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'designation') ?>
        <?= $form->field($model, 'grade') ?>
        <?= $form->field($model, 'salary') ?>
    </div>
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