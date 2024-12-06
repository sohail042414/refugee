<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */

$this->title = 'Update Spouse: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Spouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spouse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
