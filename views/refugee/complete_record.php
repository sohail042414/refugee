<?php 

use yii\bootstrap4\Accordion;
use yii\helpers\Html;


$items = [];

$items[] = [
        'label' => '<h4>Basic Information </h4>', 
        'content' => $this->render('partials/_refugee_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];


//$spouse = $model->getSpouses();

// echo '<br>FILE : '.__FILE__;
// echo '<br>LINE : '.__LINE__;
// echo '<pre>';
// print_r($spouse->count());
// exit;





if($model->getSpouses()->count() > 0){

    $items[] =  [
        'label' => '<h4>Spouse Information</h4>', 
        'active' => true,
        'content' => $this->render('partials/_spouse_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];
}


if ($model->getChildren()->count() >= 0) {
    $items[] = [
        'label' => '<h4>Children Information</h4>',
        'content' => $this->render('partials/_children_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];
}


if ($model->getMarriedChildren()->count() >= 0) {
    $items[] = [
        'label' => '<h4>married Children Information</h4>',
        'content' => $this->render('partials/_married_children_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];
}


if ($model->getFamilyMember()->count() >= 0) {
    $items[] = [
        'label' => '<h4>Family Members Information</h4>',
        'content' => $this->render('partials/_family_member_details', [
            'model' => $model
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];
}



echo Accordion::widget([
        'encodeLabels' => false, 
        'items' => $items
    ]); 

?>