<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Refugee $model */

$this->title = $model->name;
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

    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'refugee_number',
                    'name',
                    'father_guardian',
                    'birth_date',
                    'cnic',
                    'phone_no',                ],
            ]) ?>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'education',
                    'caste',
                    'disability',
                    'marital_status',
                    'is_women_guardian',
                    'passport_no',
                ],
            ]) ?>  
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'temporary_address',
                    'permanent_address',
                    'iiojk_address',
                ],
            ]) ?>  
        </div>
    </div>
</div>
