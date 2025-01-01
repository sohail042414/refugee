<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Spouse $model */

$this->title = 'Rental house Information';
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
        <div class="create-rental-house">
            <?= $this->render('partials/_rental_house_form', [
                'model' => $model,
                'refugee' => $refugee,
                'title' => $this->title, 
            ]) ?>
        </div>
    </div>
</div>




