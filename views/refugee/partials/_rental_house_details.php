<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getRentalHouse(),
    ]);

?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of rental house of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_id',
                    'house_owner_name',
                    'address',
                    'monthly_rent',
                    'phone_number',
                ],
            ]); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-rental-house','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>