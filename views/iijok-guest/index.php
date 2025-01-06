<?php
use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\SearchPoliceCase $searchModel */

$this->title = 'IIJOK Guest';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iijok-guest-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'full_name',
                'label' => 'Refugee Full Name',
                'value' => function ($model) {
                    return $model->refugee ? $model->refugee->full_name : null;
                },
            ],
            [
                'attribute' => 'refugee_number',
                'label' => 'Refugee Number',
                'value' => function ($model) {
                    return $model->refugee ? $model->refugee->refugee_number : null;
                },
            ],
            'date_of_arrival',
            'purpose_of_arrival',
            'relation',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>