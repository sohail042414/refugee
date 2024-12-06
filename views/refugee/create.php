<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */

$this->title = 'Create Refugee';
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refugee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
