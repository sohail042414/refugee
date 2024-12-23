<?php 
use yii\bootstrap4\Accordion;
use yii\helpers\Html;


// $controllerId = Yii::$app->controller->id;
$actionId = $actionId = Yii::$app->controller->action->id;
// $tab = $controllerId.'/'.$actionId;

$items = [];

$items[] = [
        'label' => '<h6>Section 1: Basic Information </h6>', 
        //'headerTemplate' => '<div class="row">{label}</div><div class="row">Something very interesting here..</div>', // Custom template
        'content' => $this->render('partials/_refugee_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'draft' || $model->status == '') ? true : false,
    ];

if($model->getSpouses()->count() > 0){

    $items[] =  [
        'label' => '<h6>Section 2: Spouse Information</h6>', 
        'content' => $this->render('partials/_spouse_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'create-spouse') ? true:false,
    ];
}


if ($model->getChildren()->count() > 0) {

    $items[] = [
        'label' => '<h6>Section 3: Children Information</h6>',
        'content' => $this->render('partials/_children_details',[
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'create-children') ? true : false,
    ];
}


if ($model->getChildrenMarried()->count() > 0) {
    $items[] = [
        'label' => '<h6>Section 3(b): Married Children Information</h6>',
        'content' => $this->render('partials/_married_children_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'married-children') ? true:false,        
    ];
}


if ($model->getFamilyMember()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 4: Family Members Information</h6>',
        'content' => $this->render('partials/_family_member_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'family-members') ? true:false,        
    ];
}

if ($model->getInlaw()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 5: Inlaw Information</h6>',
        'content' => $this->render('partials/_inlaw_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'in-law') ? true:false,        
    ];
}

if ($model->getScholarship()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 6: Scholarship Information</h6>',
        'content' => $this->render('partials/_scholarship_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'Scholarship') ? true:false,        
    ];
}

if ($model->getChildrenKashmirEducation()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 7: Children kashmir education Information</h6>',
        'content' => $this->render('partials/_children_kashmir_education_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'children-kashmir-education') ? true:false,        
    ];
}

if ($model->getJob()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 8: Job Information</h6>',
        'content' => $this->render('partials/_job_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'job') ? true:false,        
    ];
}


if ($model->getBusiness()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 9: Business Information</h6>',
        'content' => $this->render('partials/_business_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'business') ? true:false,        
    ];
}


if ($model->getEconomy()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 10: Economy Information</h6>',
        'content' => $this->render('partials/_economy_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'economy') ? true:false,        
    ];
}

if ($model->getRentalHouse()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 11: Rental House Information</h6>',
        'content' => $this->render('partials/_rental_house_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'rental-house') ? true:false,        
    ];
}

if ($model->getProperty()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 12: Property Information</h6>',
        'content' => $this->render('partials/_property_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'property') ? true:false,        
    ];
}

if ($model->getBankAccount()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 13: Bank Account Information</h6>',
        'content' => $this->render('partials/_bank_account_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'bank-account') ? true:false,        
    ];
}


if ($model->getForeignTravel()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 14: Foreign Travel Information</h6>',
        'content' => $this->render('partials/_foreign_travel_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'foreign-travel') ? true:false,        
    ];
}


if ($model->getIijokGuest()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 15:IIJOK Guest Information</h6>',
        'content' => $this->render('partials/_iijok_guest_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'iijok-guest') ? true:false,        
    ];
}


if ($model->getPoliceCase()->count() > 0) {
    $items[] = [
        'label' => '<h6> Section 16:Police Case Information</h6>',
        'content' => $this->render('partials/_police_case_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'police-case') ? true:false,        
    ];
}



echo Accordion::widget([
        'encodeLabels' => false, 
        'items' => $items
    ]); 

?>