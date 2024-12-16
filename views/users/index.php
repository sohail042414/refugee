<?php
use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Users';
?>
<h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'full_name',
        'username',
        'email',
        'phone',
        'user_type',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
