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
        <h2>Add Bank Account Data</h2>
    </div>
    <div class="card-body">

        <div class="Bank-account-form">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <!-- Children form -->
            <?php $form = ActiveForm::begin(); ?>

            <div class="row">

                <div class="col-md-4">
                    <?= $form->field($model, 'refugee_number') ?>
                    <?= $form->field($model, 'refugee_id') ?>
                    <?= $form->field($model, 'details') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'head_of_family') ?>
                    <?= $form->field($model, 'full_name') ?>
                    <?= $form->field($model, 'account_number') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'account_name') ?>
                    <?= $form->field($model, 'wife') ?>
                    <?= $form->field($model, 'children') ?>
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