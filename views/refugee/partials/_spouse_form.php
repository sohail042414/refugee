<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */
/** @var app\models\Refugee $refugee */
/** @var app\models\Children[] $children */
/** @var string $title */

?>

<div class="spouse-form">

    <h2 class="mt-4 mb-3"><?= Html::encode($title) ?></h2>

    <!-- Spouse form -->
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-4">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-4">
            <?= $form->field($model, 'refugee_number')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <div class="row">

        <div class="col-4">
            <?= $form->field($model, 'date_of_nikah')->textInput() ?>
        </div>
        <div class="col-4">
            <?= $form->field($model, 'resident_type')->dropDownList(\app\helpers\AppHelper::getResidentTypes()) ?>
        </div>
        
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>


