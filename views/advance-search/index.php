<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\grid\ActionColumn;
use app\models\Refugee;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Dashboard : Refugee Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Advance Search</h2>
                </div>
                <div class="card-body">

                    <div class="refugee-form">

                        <?php $form = ActiveForm::begin([
                            'action' => ['index'],
                            'method' => 'get',
                        ]); ?>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'full_name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'father_name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'passport_no')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'cnic')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'refugee_number')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'phone_no')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'education')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'caste')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'disability')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'marital_status')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'temporary_address')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'permanent_address')->textInput(['maxlength' => true]) ?>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($searchModel, 'iiojk_address')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <?= $form->field($searchModel, 'police_case')->checkbox(['label' => 'Police Case']) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($searchModel, 'travelled_iijok')->checkbox(['label' => 'Foreign Travel']) ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($searchModel, 'guest_from_iijok')->checkbox(['label' => 'Guest from IIJOK']) ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton('Search ', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'full_name',
        'father_name',
        'cnic',
        'refugee_number',
        'phone_no',
        'education',
        'caste',
        'disability',
        'marital_status',
        'passport_no',

        [
            'label' => 'Police Cases',
            'value' => function ($model) {
                if (!empty($model->policeCase)) {
                    return implode('<br>', array_map(function ($case) {
                        return "FIR: {$case->FIR}, Crime: {$case->crime}, Details: {$case->details}";
                    }, $model->policeCase));
                }
                return 'No Police Cases';
            },
            'format' => 'raw',
        ],


        [
            'label' => 'Foreign Travel',
            'value' => function ($model) {
                if (!empty($model->foreignTravel)) {
                    return implode('<br>', array_map(function ($travel) {
                        return "Details: {$travel->details}, Country: {$travel->country_name}, Purpose: {$travel->purpose_of_travel}";
                    }, $model->foreignTravel));
                }
                return 'No Foreign Travels';
            },
            'format' => 'raw',
        ],

        [
            'label' => 'Guests from IIJOK',
            'value' => function ($model) {
                if (!empty($model->iijokGuest)) {
                    return implode('<br>', array_map(function ($guest) {
                        return "Name: {$guest->full_name}, Relation: {$guest->relation}, Details: {$guest->details}";
                    }, $model->iijokGuest));
                }
                return 'No Guests from IIJOK';
            },
            'format' => 'raw',
        ],


            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Refugee $model) {
        return Url::toRoute([$action, 'id' => $model->id]);
    },
                'header' => 'Actions', 
                'contentOptions' => ['style' => 'width: 100px; white-space: nowrap;'],
            ],
        ],
    ]); ?>
</div>