<?php

use app\models\Camp;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="refugee-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-4">
            <?= $form->field($model, 'camp_id')->dropDownList(ArrayHelper::map(Camp::find()->all(), 'id', 'name')) ?>
        </div>  
        <div class="col-md-4">
            <?= $form->field($model, 'refugee_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'phone_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'caste')->textInput(['maxlength' => true]) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'gender')->dropDownList(\app\helpers\AppHelper::genderList()) ?>
         </div>
        <div class="col-md-4">
            <?= $form->field($model, 'passport_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3">
             <?= $form->field($model, 'marital_status')->dropDownList(\app\helpers\AppHelper::maritalStatusList()) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'is_divorced')->checkbox(['class'=>'form-check-input']) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'is_widower')->checkbox(['class'=>'form-check-input']) ?>
        </div>
        <div class="col-3">
            <?= $form->field($model, 'is_widow')->checkbox(['class'=>'form-check-input']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'temporary_address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'permanent_address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'iiojk_address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
