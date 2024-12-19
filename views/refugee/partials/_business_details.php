<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getBusiness(),
    ]);


?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of Business of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_id',
                    'business_details',
                    'relation',
                    'clinic',
                    'labor',
                    'shop',
                ],
            ]); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-children','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>