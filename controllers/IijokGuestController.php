<?php

namespace app\controllers;

use app\models\SearchIijokGuest;
use app\models\Refugee;

class IijokGuestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new SearchIijokGuest();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

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