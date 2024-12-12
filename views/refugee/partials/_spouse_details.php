<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
        $dataProvider = new ActiveDataProvider([
            'query' => $model->getSpouses(),
        ]);

?>

<div class="row">
    <div class="col-12">
        <p>Below is this list of Wifes (Or Husband) for the Refugee (Family Head).</p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_number',
                    'full_name',
                    'cnic',
                    'date_of_nikah',
                    'resident_type',
                    'created_at',
                    'updated_at',
                ],
            ]); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-spouse','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Next, Add Children', ['/refugee/create-children','refugee_id' => $model->id], ['class' => 'btn btn-primary float-right']) ?>
    </div>
</div>