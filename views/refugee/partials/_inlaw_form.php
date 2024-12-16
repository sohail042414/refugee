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
        <h2>Add in law Data</h2>
    </div>

    <div class="card-body">
<div class="refugee-inlaw">

<h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
        <?= $form->field($model, 'refugee_number') ?>
        <?= $form->field($model, 'refugee_id') ?>
        <?= $form->field($model, 'relation') ?>
        </div>
        <div class="col-md-4">
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'living_status') ?>
        <?= $form->field($model, 'occupation') ?>
        </div>
        <div class="col-md-4">
        <?= $form->field($model, 'cnic')->textInput(['maxlength'=>true]) ?>
        <?= $form->field($model, 'phone_number') ?>
        </div>
        <div class="row">
            <div class="col-md-6">
        <?= $form->field($model, 'current_address') ?>
        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'burial_address') ?>
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