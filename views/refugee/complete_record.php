<?php 

use yii\bootstrap4\Accordion;


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
        'content' => $this->render('partials/_spouse_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];
}

if($model->getChildren()->count() > 0){

    $items[] = [
        'label' => '<h4>Children Information</h4>', 
        'content' => $this->render('partials/_refugee_details', [
            'model' => $model,
        ]),
        'contentOptions' => ['class' => 'bg-light'],
    ];

}

echo Accordion::widget([
        'encodeLabels' => false, 
        'items' => $items
    ]); 

?>