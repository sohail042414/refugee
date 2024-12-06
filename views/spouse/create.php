<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */

$this->title = 'Spouse Information';
$this->params['breadcrumbs'][] = ['label' => 'Spouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spouse-create">


    <?= $this->render('_form', [
        'model' => $model,
        'refugee' => $refugee,
        'title' => $this->title, 
    ]) ?>

</div>
