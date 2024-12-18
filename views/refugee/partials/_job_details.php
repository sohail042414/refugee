<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
    use yii\db\Query;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model-> getJob(),
    ]);

    // $dataProvider = new ActiveDataProvider([
    //     'query' => (new Query())
    //         ->select('*')
    //         ->from('family_member'),
    // ]);

?>

<div class="row">
    <div class="col-12">
        <p>Below is the details of Job  of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'refugee_id',
                    'job_type',
                    'other_details',
                    'relation',
                    'salary',
                    
                ],
            ]); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-job','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>