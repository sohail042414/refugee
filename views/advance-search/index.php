<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Dashboard : Refugee Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Advance Search</h2>
                </div>
                <div class="card-body">

                    <div class="refugee-form">

                        <?php $form = ActiveForm::begin(); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'father_guardian')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'birth_date')->textInput(['type' => 'date']) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'refugee_number')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'phone_no')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'caste')->textInput(['maxlength' => true]) ?>  
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'marital_status')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'passport_no')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'is_women_guardian')->radioList([
                                    0 => 'Divorced', 
                                    1 => 'Widow', 
                                    null => 'Other (Not Applicable)'
                                ]) ?>
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
                            <?= Html::submitButton('Search ', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>    
</div>
