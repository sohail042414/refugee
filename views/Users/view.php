<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->username;
?>
<h1><?= Html::encode($this->title) ?></h1>

<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<?= Html::a('Delete', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger',
    'data' => [
        'confirm' => 'Are you sure you want to delete this user?',
        'method' => 'post',
    ],
]) ?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'full_name',
        'username',
        'email',
        'phone',
        'user_type',
        'created_at',
        'updated_at',
    ],
]) ?>
