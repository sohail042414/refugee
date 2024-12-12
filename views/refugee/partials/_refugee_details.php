<?php 
use yii\widgets\DetailView;
use yii\helpers\Html;
?>
<div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'camp_id',
                        'label' => 'Camp',
                        'value' => $model->camp->name,
                    ],
                    'refugee_number',
                    'gender',
                    'full_name',
                    'father_name',
                    'date_of_birth',
                ],
            ]) ?>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'cnic',
                    'phone_no',
                    'education',
                    'caste',
                    'disability',
                ],
            ]) ?>  
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'passport_no',
                    'marital_status',
                    'is_divorced:boolean',
                    'is_widow:boolean',
                    'is_widower:boolean',
                ],
            ]) ?>  
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'temporary_address',
                    'permanent_address',
                    'iiojk_address',
                ],
            ]) ?>  
        </div>
    </div>
<?php if($model->status == 'create-spouse'){ ?>
<div class="row">
    <div class="col-12">
        <?= Html::a('Next, Add Spouse Information', ['/refugee/create-spouse','refugee_id' => $model->id], ['class' => 'btn btn-primary float-right']) ?>
    </div>
</div>
<?php } ?>