<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getEconomy(),
    ]);


?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of Economy of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_id',
                    'monthly_income',
                    'subsistence_allowance',
                    'da',
                    'total_monthly_income'
                ],
            ]); 
        ?>
    </div>
</div>
<?php if($show_actions){ ?>
<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-economy','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php } ?> 