<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Dashboard: Children Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card-body">
                <div class="children-form">
                    <?php $form = ActiveForm::begin([
                        'action' => ['index'],
                        'method' => 'get',
                    ]); ?>

                    <div class="row">
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'full_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'refugee_number')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'education')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'date_of_birth')->input('date') ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'institute')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'passing_year')->textInput(['maxlength' => 4]) ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'occupation')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-4">
                            <?= $form->field($searchModel, 'disability')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
