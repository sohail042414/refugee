<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ActiveForm $form */
?>
<div class="card">

    <div class="card-header">
        <h2>Add Property Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-Property">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-4">
                <?= $form->field($model, 'refugee_id') ?>
                    <?= $form->field($model, 'refugee_number') ?>
                    <?= $form->field($model, 'detail') ?>
                    <?= $form->field($model, 'car') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'personal_private') ?>
                    <?= $form->field($model, 'wife') ?>
                    <?= $form->field($model, 'children') ?>
                    <?= $form->field($model, 'shop') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'house') ?>
                    <?= $form->field($model, 'plot') ?>
                    <?= $form->field($model, 'jewellery') ?>
                    <?= $form->field($model, 'miscellaneous') ?>
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