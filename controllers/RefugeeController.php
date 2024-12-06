<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Refugee;
use app\models\Spouse;
use app\models\Children;
use app\models\SearchRefugee;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class RefugeeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index','view','create','update','create-spouse'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new SearchRefugee();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Refugee model.
     * @param integer $id
     */
    public function actionView($id)
    {

        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }


    public function actionCreate()
    {
        $model = new Refugee();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create-spouse', 'refugee_id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionCreateSpouse($refugee_id)
    {

        $refugee = $this->findModel($refugee_id);

        $model = new Spouse();
        
        $model->refugee_id = $refugee_id;         
    
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create-children', 'refugee_number' => $model->refugee_number]);
        }
   
        return $this->render('create_spouse', [
            'model' => $model,
            'refugee' => $refugee
        ]);

    }
    public function actionCreateChildren($refugee_number = null)
    {
        $model = new Children();
        $refugee = null;
        $spouse = null;
    
        if ($refugee_number) {
            $model->refugee_number = $refugee_number;
            $refugee = Refugee::findOne(['refugee_number' => $refugee_number]);
            $spouse = Spouse::findOne(['refugee_number' => $refugee_number]); 
        }
    
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Child information saved successfully.');

            if (Yii::$app->request->post('next')) {
                return $this->redirect(['next-action', 'refugee_number' => $refugee_number]); 
            }

            return $this->refresh();
        }
    
        return $this->render('/children/create', [
            'model' => $model,
            'refugee' => $refugee,
            'spouse' => $spouse, 
            'title' => 'Children Information',
        ]);
    }
    

    

    /**
     * Finds the Refugee model based on its primary key value.
     * @param integer $id
     * @throws NotFoundHttpException if the model cannot be found.
     */
    protected function findModel($id)
    {
        if (($model = Refugee::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested user does not exist.');
    }
}