<?php
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\data\ActiveDataProvider;
?>

<?php 
    $dataProvider = new ActiveDataProvider([
        'query' => $model->getScholarship(),
    ]);

?>

<div class="row">
    <div class="col-12">
        <p>Below is the list of Scholarship of refugee <?php echo $model->full_name; ?> </p> 
    </div>
</div>

<div class="row">
    <div class="col-12">
        
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'details',
                    'head_of_family',
                    'student_name',
                    'scholarship',
                    'p_type',
                ],
            ]); 
        ?>
    </div>
</div>
<?php if($show_actions){ ?>
<div class="row">
    <div class="col-12">
        <?= Html::a('Add More', ['/refugee/create-scholarship','refugee_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php } ?>

