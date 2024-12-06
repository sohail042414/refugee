<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SearchSpouse $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="spouse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'wife_first_name') ?>

    <?= $form->field($model, 'wife_second_name') ?>

    <?= $form->field($model, 'cnic') ?>

    <?= $form->field($model, 'refugee_number') ?>

    <?php // echo $form->field($model, 'date_of_nikah') ?>

    <?php // echo $form->field($model, 'local_or_migrant') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
