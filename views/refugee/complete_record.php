<?php 
use yii\bootstrap4\Accordion;
use yii\helpers\Html;


// $controllerId = Yii::$app->controller->id;
$actionId = $actionId = Yii::$app->controller->action->id;
// $tab = $controllerId.'/'.$actionId;

$items = [];

$items[] = [
        'label' => '<h4>Basic Information </h4>', 
        'content' => $this->render('partials/_refugee_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'draft' || $model->status == '') ? true : false,
    ];

if($model->getSpouses()->count() > 0){

    $items[] =  [
        'label' => '<h4>Spouse Information</h4>', 
        'content' => $this->render('partials/_spouse_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'create-spouse') ? true:false,
    ];
}


if ($model->getChildren()->count() > 0) {

    $items[] = [
        'label' => '<h4>Children Information</h4>',
        'content' => $this->render('partials/_children_details',[
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'create-children') ? true : false,
    ];
}


if ($model->getChildrenMarried()->count() > 0) {
    $items[] = [
        'label' => '<h4>married Children Information</h4>',
        'content' => $this->render('partials/_married_children_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'married-children') ? true:false,        
    ];
}


if ($model->getFamilyMember()->count() > 0) {
    $items[] = [
        'label' => '<h4>Family Members Information</h4>',
        'content' => $this->render('partials/_family_member_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
        'expand' => ($model->status == 'family-members') ? true:false,        
    ];
}



echo Accordion::widget([
        'encodeLabels' => false, 
        'items' => $items
    ]); 

?>