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
</div>
