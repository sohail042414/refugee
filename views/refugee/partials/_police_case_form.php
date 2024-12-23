<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ActiveForm $form */
?>
<div class="card">

    <div class="card-header">
        <h2>Add Police Case  Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-Police-case">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

            <div class="col-md-4">
        <?= $form->field($model, 'refugee_number') ?>
        <?= $form->field($model, 'refugee_id') ?>
        <?= $form->field($model, 'details') ?>
        </div>
        <div class="col-md-4">
        <?= $form->field($model, 'FIR') ?>
        <?= $form->field($model, 'crime') ?>
        <?= $form->field($model, 'date_of_arrest')->textInput(['type' => 'date']) ?>
        </div>
        <div class="col-md-4">
        <?= $form->field($model, 'bail') ?>
        <?= $form->field($model, 'date_of_release')->textInput(['type' => 'date']) ?>
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