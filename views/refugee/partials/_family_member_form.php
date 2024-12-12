<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FamilyMember $model */
/** @var ActiveForm $form */
?>

<div class="card">

    <div class="card-header">
        <h2>Add Family members Data</h2>
    </div>

    <div class="card-body">
<div class="refugee-family_member">

<h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

    <div class="col-md-4">
        <?= $form->field($model, 'full_name') ?>
        <?= $form->field($model, 'refugee_number') ?>
        
    </div>


    <div class="col-md-4">
    <?= $form->field($model, 'relation') ?>
    <?= $form->field($model, 'living_status') ?>
    </div>

    <div class="col-md-4">

        <?= $form->field($model, 'cnic') ?>
        <?= $form->field($model, 'phone_number') ?>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <?= $form->field($model, 'burial_address') ?>
        
    </div>


    <div class="col-md-8">
    <?= $form->field($model, 'current_address') ?>
    </div>

    </div>
    </div>
        <div class="form-group">
                <?= Html::submitButton('Save', [
                    'class' => 'btn btn-success',
                    'name' => 'save',
                ]) ?>
                <?= Html::submitButton('Next', [
                    'class' => 'btn btn-primary',
                    'name' => 'next',
                    'value' => 'next',
                ]) ?>
            </div>
    <?php ActiveForm::end(); ?>


        </div>
    </div>
</div>