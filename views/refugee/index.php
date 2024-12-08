<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use app\models\Refugee;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\SearchRefugee $searchModel */

$this->title = 'Refugee Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refugee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Refugee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'refugee_number',
            'full_name',
            'father_name',
            'date_of_birth',
            'cnic',            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Refugee $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'header' => 'Actions', // Optional: Header text for the column
                 'contentOptions' => ['style' => 'width: 100px; white-space: nowrap;'],
            ],
            
        ],
    ]); ?>
</div>
