<?php
use yii\grid\GridView;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\SearchPoliceCase $searchModel */

$this->title = 'Police Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="police-case-index">

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
            'FIR',
            'crime',
            'details',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
