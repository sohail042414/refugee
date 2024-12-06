<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\AdvanceSearch;

class AdvanceSearchController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    
    public function actionIndex()
    { 

        $model = new AdvanceSearch();

        return $this->render('index',[
            'model' => $model
        ]); 
    }

}
