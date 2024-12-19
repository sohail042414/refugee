<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */

$this->title = 'Business Information';
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['/refugee/index']];
$this->params['breadcrumbs'][] = ['label' => $refugee->full_name, 'url' => ['/refugee/view','id'=>$refugee->id]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-12">
        <?= $this->render('complete_record', [
            'model' => $refugee,
        ]) ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="create-job">
        <?= $this->render('partials/_business_form', [
            'model' => $model,
            'refugee' => $refugee,
            'title' => $this->title, 
        ]) ?>
        </div>
    </div>
</div>

