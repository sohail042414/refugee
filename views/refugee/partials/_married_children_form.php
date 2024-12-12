<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ChildrenSpouse $model */
/** @var ActiveForm $form */
?>
<div class="card">

    <div class="card-header">
        <h2>Add Married Children Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-married_children">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($model, 'refugee_number') ?>
                    <?= $form->field($model, 'full_name') ?>
                    <?= $form->field($model, 'resident_type') ?>
                </div>


                <div class="col-md-3">
                    <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?>
                    <?= $form->field($model, 'date_of_nikah')->textInput(['type' => 'date']) ?>
                    <?= $form->field($model, 'children_details') ?>
                </div>


                <div class="col-md-3">
                    <?= $form->field($model, 'spouse_name') ?>
                    <?= $form->field($model, 'education') ?>
                    <?= $form->field($model, 'institute') ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'passing_year') ?>
                    <?= $form->field($model, 'occupation') ?>
                    <?= $form->field($model, 'disability') ?>
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