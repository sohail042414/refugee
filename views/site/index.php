<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Dashboard : Refugee Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Dashboard</h2>
                </div>
                <div class="card-body">

                    <div class="row mt-2">
                        
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Basic Details</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Total Camps : 20</li>
                                    <li class="list-group-item">Total Refuges : 1000</li>
                                    <li class="list-group-item">Total Users : 20</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Visits and Travels</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Foreign Tours : 20</li>
                                    <li class="list-group-item">Visits To IOJK : 1000</li>
                                    <li class="list-group-item">Guests from IOJK : 50</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Statistics </h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Added last week : 20</li>
                                    <li class="list-group-item">Added Last month : 1000</li>
                                    <li class="list-group-item">Addes Last Year : 50</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <a href="<?php echo Url::toRoute(['refugee/create']); ?>" class="btn btn-success mr-5">Add Refugee</a>
                            <a href="<?php echo Url::toRoute(['advance-search']); ?>" class="btn btn-primary">Advance Search</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>    
</div>
