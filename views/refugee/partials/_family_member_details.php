<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
    use yii\db\Query;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getFamilyMember(),
    ]);

    // $dataProvider = new ActiveDataProvider([
    //     'query' => (new Query())
    //         ->select('*')
    //         ->from('family_member'),
    // ]);

?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of Family Members of refugee <?php echo $model->full_name; ?> </p> 
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
                    'phone_number',
                    'relation',
                    'living_status',
                    
                ],
            ]); 
        ?>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-family-member','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>