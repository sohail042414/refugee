<?php

use app\helpers\AppHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ActiveForm $form */
?>
<div class="card">

    <div class="card-header">
        <h2>Add Rental House Data</h2>
    </div>

    <div class="card-body">
        <div class="refugee-rental-house">

            <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-4">
                <?= $form->field($model, 'house_owner_name') ?>
                    <?= $form->field($model, 'refugee_number') ?>
                </div>
                <div class="col-md-4">
                <?= $form->field($model, 'phone_number') ?>
                    <?= $form->field($model, 'address') ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'monthly_rent') ?>
                    
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
                <a href="<?= \yii\helpers\Url::to(['create-rental-house', 'refugee_id' => $refugee->id, 'skip' => 1]) ?>"
                class="btn btn-warning">Skip</a>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>