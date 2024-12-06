<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Children $model */

$this->title = 'Create Children';
$this->params['breadcrumbs'][] = ['label' => 'Childrens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="children-create">

    

    <?= $this->render('_form', [
        'model' => $model,
        'refugee' => $refugee,
        'spouse' => $spouse,
        'title' => $this->title, 
    ]) ?>

</div>

