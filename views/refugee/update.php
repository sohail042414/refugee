<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */

$this->title = 'Update Refugee: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refugee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
