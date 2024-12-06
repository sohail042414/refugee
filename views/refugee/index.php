<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
            'name',
            'father_guardian',
            'birth_date',
            'cnic',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
