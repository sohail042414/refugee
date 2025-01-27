<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Dashboard : Refugee Record Management System';
?>

<div class="site-index">

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white" style="background: linear-gradient(90deg, #007bff, #6610f2);">
                    <h1 class="text-center">Dashboard</h1>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <!-- Basic Details -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm" style="height: 300px;">
                                <div class="card-header text-white" style="background: linear-gradient(45deg, #17a2b8, #20c997);">
                                    <h4 class="text-center">Basic Details</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center pt-5">
                                        <span class="h5 text-info">Total Camps:</span>
                                        <span class="h5 font-weight-bold"><?= $totalCamps ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-info">Total Refugees:</span>
                                        <span class="h5 font-weight-bold"><?= $totalRefugees ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-info">Total Users:</span>
                                        <span class="h5 font-weight-bold"><?= $totalUsers ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Visits and Travels -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm" style="height: 300px;">
                                <div class="card-header text-white" style="background: linear-gradient(45deg, #28a745, #218838);">
                                    <h4 class="text-center">Visits and Travels</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center pt-5">
                                        <span class="h5 text-success">Foreign Tours:</span>
                                        <span class="h5 font-weight-bold"><?= $foreignTours ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-success">Visits To IOJK:</span>
                                        <span class="h5 font-weight-bold"><?= $visitsToIOJK ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-success">Guests from IOJK:</span>
                                        <span class="h5 font-weight-bold"><?= $guestsFromIOJK ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Statistics -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm" style="height: 300px;">
                                <div class="card-header text-white" style="background: linear-gradient(45deg, #ffc107, #fd7e14);">
                                    <h4 class="text-center">Statistics</h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center pt-5">
                                        <span class="h5 text-warning">Added Last Week:</span>
                                        <span class="h5 font-weight-bold"><?= $addedLastWeek ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-warning">Added Last Month:</span>
                                        <span class="h5 font-weight-bold"><?= $addedLastMonth ?></span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <span class="h5 text-warning">Added Last Year:</span>
                                        <span class="h5 font-weight-bold"><?= $addedLastYear ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons Section -->
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <a href="<?= Url::toRoute(['refugee/create']); ?>" class="btn btn-lg btn-success mx-3 shadow">
                                <i class="fas fa-plus-circle"></i> Add Refugee
                            </a>
                            <a href="<?= Url::toRoute(['advance-search']); ?>" class="btn btn-lg btn-primary shadow">
                                <i class="fas fa-search"></i> Advance Search
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

