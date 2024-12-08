<?php

use app\models\Camp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\SearchCamp $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Camps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Camp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'district_id',
            [
                'attribute' => 'district_id',
                'header' => 'District',
                'value' => function ($model) {
                    return $model->district->name;
                 }
            ],
            'name',
            'address',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Camp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'header' => 'Actions', // Optional: Header text for the column
                 'contentOptions' => ['style' => 'width: 120px; white-space: nowrap;'],
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
