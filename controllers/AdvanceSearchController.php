<?php

namespace app\controllers;

use app\models\AdvanceSearch;
use Yii;
use yii\filters\AccessControl;
use app\models\Refugee;
use app\models\SearchRefugee;
use yii\web\Controller;
use yii\web\Response;

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
                        'actions' => ['index', 'view'],
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
        $searchModel = new AdvanceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('/refugee/view', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
{
    if (($model = Refugee::findOne($id)) !== null) {
        return $model;
    }

    throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
}
}