<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SearchRefugee $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="refugee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'father_guardian') ?>

    <?= $form->field($model, 'birth_date') ?>

    <?= $form->field($model, 'cnic') ?>

    <?php // echo $form->field($model, 'refugee_number') ?>

    <?php // echo $form->field($model, 'phone_no') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'caste') ?>

    <?php // echo $form->field($model, 'disability') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'is_women_guardian') ?>

    <?php // echo $form->field($model, 'passport_no') ?>

    <?php // echo $form->field($model, 'temporary_address') ?>

    <?php // echo $form->field($model, 'permanent_address') ?>

    <?php // echo $form->field($model, 'iiojk_address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
