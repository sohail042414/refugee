<?php

use yii\bootstrap4\Accordion;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Children $model */
/** @var app\models\Refugee $refugee */
/** @var app\models\Spouse $spouse */
/** @var string $title */

$this->params['breadcrumbs'][] = ['label' => 'Children', 'url' => ['index']];
?>

<div class="children-form">

    <!-- Accordion -->
    <?= Accordion::widget([
        'items' => [
            [
                'label' => '<h4>Basic Information</h4>',
                'content' => $refugee ? DetailView::widget([
                    'model' => $refugee,
                    'attributes' => [
                        'id',
                        'name',
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
                ]) : '<p>No Refugee Information Available</p>',
                'contentOptions' => ['class' => 'bg-light'],
            ],
            [
                'label' => '<h4>Spouse Information</h4>',
                'content' => $spouse ? DetailView::widget([
                    'model' => $spouse,
                    'attributes' => [
                        'id',
                        'wife_first_name',
                        'wife_second_name',
                        'cnic',
                        'refugee_number',
                        'date_of_nikah',
                        'local_or_migrant',
                    ],
                ]) : '<p>No Spouse Information Available</p>',
                'contentOptions' => ['class' => 'bg-light'],
            ],
        ],
        'encodeLabels' => false, 
    ]); ?>
    <h2 class="mt-4 mb-3"><?= Html::encode($title) ?></h2>

    <!-- Children form -->
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'educational_institution_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disability')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'refugee_number')->hiddenInput()->label(false) ?>

<div class="form-group">
    <?= Html::submitButton('Save', [
        'class' => 'btn btn-success', 
        'name' => 'save',
    ]) ?>
    <?= Html::submitButton('Next', [
        'class' => 'btn btn-primary', 
        'name' => 'next',
    ]) ?>
</div>


    <?php ActiveForm::end(); ?>
</div>
