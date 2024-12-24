<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getBankAccount(),
    ]);


?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of bank account of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_id',
                    'full_name',
                    'head_of_family',
                    'details',
                    'account_number',
                    'account_name',
                ],
            ]); 
        ?>
    </div>
</div>
<?php if($show_actions){ ?>
<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-bank-account','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php } ?> 