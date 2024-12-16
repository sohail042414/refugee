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
        'label' => '<h6> Section 4: Inlaw Information</h6>',
        'content' => $this->render('partials/_inlaw_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'in-law') ? true:false,        
    ];
}



echo Accordion::widget([
        'encodeLabels' => false, 
        'items' => $items
    ]); 

?>