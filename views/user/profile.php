<?php
/** @var yii\web\View $this */
/** @var app\models\User $user */

use yii\helpers\Html;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-profile">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><strong>Username:</strong> <?= Html::encode($user->username) ?></p>
    <p><strong>Email:</strong> <?= Html::encode($user->email) ?></p>

    <p>
        <?= Html::a('Update Password', ['update-password'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
