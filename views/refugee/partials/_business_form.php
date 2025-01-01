<?php

use yii\bootstrap4\Accordion;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Children $model */
/** @var app\models\Refugee $refugee */
/** @var app\models\Spouse $spouse */
/** @var string $title */

$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
?>

<div class="card">
    <div class="card-header">
        <h2>Add Business Data</h2>
    </div>
    <div class="card-body">

        <div class="business-form">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <!-- Children form -->
            <?php $form = ActiveForm::begin(); ?>

            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'refugee_id') ?>
                    <?= $form->field($model, 'business_details') ?>
                    <?= $form->field($model, 'relation') ?>
                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'from_date')->textInput(['type' => 'date']) ?>
                    <?= $form->field($model, 'monthly_income') ?>
                    <?= $form->field($model, 'clinic') ?>
                </div>
                
                <div class="col-md-4">
                    <?= $form->field($model, 'labor') ?>
                    <?= $form->field($model, 'shop') ?>
                    <?= $form->field($model, 'other_details') ?>
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