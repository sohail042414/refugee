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
                    <h2>Add Children Data</h2>
                </div>
                <div class="card-body">

                    <div class="children-form">

                        <h2 class="mt-4 mb-3"><?//= Html::encode($title) ?></h2>

                        <!-- Children form -->
                        <?php $form = ActiveForm::begin(); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date']) ?>
                                <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'institute')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'passing_year')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>
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
                            'value'=> 'next',
                        ]) ?>
                    </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
