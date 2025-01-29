<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\helpers\Url;

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
        [
            'class' => ActionColumn::class,
            'template' => '{view} {update} {delete} {update-password}',
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    return Html::a(
                        '<i class="fas fa-eye"></i>',
                        $url,
                        [
                            'title' => 'View',
                            'aria-label' => 'View',
                            'class' => 'btn btn-link me-1',
                        ]
                    );
                },
                'update' => function ($url, $model, $key) {
                    return Html::a(
                        '<i class="fas fa-edit"></i>',
                        $url,
                        [
                            'title' => 'Update',
                            'aria-label' => 'Update',
                            'class' => 'btn btn-link me-1', 
                        ]
                    );
                },
                'delete' => function ($url, $model, $key) {
                    return Html::a(
                        '<i class="fas fa-trash"></i>',
                        $url,
                        [
                            'title' => 'Delete',
                            'aria-label' => 'Delete',
                            'class' => 'btn btn-link me-1', 
                            'data-confirm' => 'Are you sure you want to delete this item?',
                            'data-method' => 'post',
                        ]
                    );
                },
                'update-password' => function ($url, $model, $key) {
                    return Html::a(
                        '<i class="fas fa-key"></i>',
                        ['user/update-password', 'id' => $model->id],
                        [
                            'title' => 'Update Password',
                            'aria-label' => 'Update Password',
                            'class' => 'btn btn-link', 
                        ]
                    );
                },
            ],
        ],
    ],
]); ?>
