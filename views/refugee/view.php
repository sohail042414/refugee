<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Refugees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="refugee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php 
    /*
    echo $this->render('partials/_refugee_details',[
        'model' => $model,
    ]);
    */
     ?>

    <?php     
    echo $this->render('complete_record',[
        'model' => $model,
    ]);    
    ?>


</div>
