<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap4\Tabs;
use yii\widgets\ActiveForm;
use yii\grid\ActionColumn;

$this->title = 'Dashboard : Refugee Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Advanced Search</h2>
                </div>
                <div class="card-body">

                <?= Tabs::widget([
    'items' => [
        [
            'label' => 'Search by Refugee Details',
            'content' => $this->render('_form_personal', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]),
            'active' => true,
        ],
        [
            'label' => 'Search by Children\'s Details',
            'content' => $this->render('_form_children', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]),
        ],
        [
            'label' => 'Search by Family Member Details',
            'content' => $this->render('_form_family', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]),
        ],
    ],
]); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
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
                    'class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function ($action, $model) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    },
                    'header' => 'Actions',
                    'contentOptions' => ['style' => 'width: 100px; white-space: nowrap;'],
                ],
            ],
        ]); ?>
    </div>
</div>
