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


    <h4>Head of Family Information</h4>
    <?php

    echo $this->render('partials/_refugee_details', [
        'model' => $model,
    ]);

    ?>

    <h4>Spouse Information</h4>
    <?php
    echo $this->render('partials/_spouse_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

    <h4>Children Information</h4>
    <?php
    echo $this->render('partials/_children_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Married Children Information</h4>
    <?php
    echo $this->render('partials/_married_children_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>


<h4>Family Members Information</h4>
    <?php
    echo $this->render('partials/_family_member_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>In-Law Information</h4>
    <?php
    echo $this->render('partials/_inlaw_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Scholarship Information</h4>
    <?php
    echo $this->render('partials/_scholarship_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Children Kashmir Education Information</h4>
    <?php
    echo $this->render('partials/_children_kashmir_education_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Job Information</h4>
    <?php
    echo $this->render('partials/_job_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Business Information</h4>
    <?php
    echo $this->render('partials/_business_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Economy Information</h4>
    <?php
    echo $this->render('partials/_economy_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Rental House Information</h4>
    <?php
    echo $this->render('partials/_rental_house_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>

<h4>Property Information</h4>
    <?php
    echo $this->render('partials/_property_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>


<h4>Bank Account Information</h4>
    <?php
    echo $this->render('partials/_bank_account_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>


<h4>Foreign Travel Information</h4>
    <?php
    echo $this->render('partials/_foreign_travel_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>



<h4>IIJOK Guests Information</h4>
    <?php
    echo $this->render('partials/_iijok_guest_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>


<h4>Police Case Information</h4>
    <?php
    echo $this->render('partials/_police_case_details', [
        'model' => $model,
        'show_actions' => false,
    ])
        ?>




















    <?php
    // echo $this->render('complete_record',[
    //     'model' => $model,
    // ]);    
    ?>


</div>