<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Camp $model */

$this->title = 'Create Camp';
$this->params['breadcrumbs'][] = ['label' => 'Camps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
