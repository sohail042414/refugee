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
        <h2>Add Foreign Travel Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-foreign-travel">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-4">
                <?= $form->field($model, 'refugee_id') ?>
                <?= $form->field($model, 'refugee_number') ?>
                <?= $form->field($model, 'details') ?>
                <?= $form->field($model, 'personal_private') ?>
                </div>
                <div class="col-md-4">
                <?= $form->field($model, 'passport_number') ?>
                <?= $form->field($model, 'country_name') ?>
                <?= $form->field($model, 'purpose_of_travel') ?>
                <?= $form->field($model, 'date_of_return')->textInput(['type' => 'date'])?>
                </div>
                <div class="col-md-4">
                <?= $form->field($model, 'children') ?>
                <?= $form->field($model, 'income') ?>
                <?= $form->field($model, 'wife') ?>
                <?= $form->field($model, 'date_of_departure')->textInput(['type' => 'date'])?>
                </div>
                <div class="col-md-4">
                <?= $form->field($model, 'occupation_abroad') ?>
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