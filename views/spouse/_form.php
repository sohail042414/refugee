<?php

use yii\bootstrap4\Accordion;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */
/** @var app\models\Refugee $refugee */
/** @var app\models\Children[] $children */
/** @var string $title */

$this->params['breadcrumbs'][] = ['label' => 'Spouses', 'url' => ['index']];
?>

<div class="spouse-form">

    <? /*= Accordion::widget([
        'items' => [
            [
                'label' => '<h4>Basic Information</h4>', 
                'content' => DetailView::widget([
                    'model' => $refugee,
                    'attributes' => [
                        'id',
                        'full_name',
                        'father_guardian',
                        'birth_date',
                        'cnic',
                        'refugee_number',
                        'phone_no',
                        'education',
                        'caste',
                        'disability',
                        'marital_status',
                        'is_women_guardian',
                        'passport_no',
                        'temporary_address',
                        'permanent_address',
                        'iiojk_address',
                    ],
                ]),
                'contentOptions' => ['class' => 'bg-light'],
            ],
        ],
        'encodeLabels' => false, 
    ]); */ ?>

    <h2 class="mt-4 mb-3"><?= Html::encode($title) ?></h2>

    <!-- Spouse form -->
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refugee_number')->hiddenInput()->label(false) ?>
    
    <?= $form->field($model, 'date_of_nikah')->textInput() ?>

    <?= $form->field($model, 'local_or_migrant')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
