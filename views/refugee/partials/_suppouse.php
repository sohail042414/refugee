<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<div class="refugee-index">

    <h1>Wifes Information</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'father_guardian',
            'birth_date',
            'cnic',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
