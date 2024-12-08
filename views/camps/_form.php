<?php

use app\models\District;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Camp $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="camp-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>            
        </div>       
        <div class="col-6">
            <?= $form->field($model, 'district_id')->dropDownList(ArrayHelper::map(District::find()->all(), 'id', 'name')) ?>
        </div>  
    </div>

    <div class="row">
        <div class="col-12">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
