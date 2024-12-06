<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(); ?>

<?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
<?= $form->field($model, 'user_type')->dropDownList(['super' => 'Super', 'user' => 'User']) ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
