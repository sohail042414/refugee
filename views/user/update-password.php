<?php
/** @var yii\web\View $this */
/** @var app\models\UpdatePasswordForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Update Password';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-update-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'current_password')->passwordInput() ?>
    <?= $form->field($model, 'new_password')->passwordInput() ?>
    <?= $form->field($model, 'confirm_password')->passwordInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Update Password', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
