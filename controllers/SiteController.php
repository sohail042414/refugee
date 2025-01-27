<?php

namespace app\controllers;

use app\models\ForeignTravel;
use app\models\IijokGuest;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Camp;
use app\models\Refugee;
use app\models\User;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout','index'],
                'rules' => [
                    [
                        'actions' => ['logout','index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            /*
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            */
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    
    public function actionIndex()
    {
        $totalCamps = Camp::find()->count();
        $totalRefugees = Refugee::find()->count();
        $totalUsers = User::find()->count();
    
        $foreignTours = ForeignTravel::find()->count();
        $visitsToIOJK = IijokGuest::find()->count();
        $guestsFromIOJK = IijokGuest::find()->count();
    
        $addedLastWeek = Refugee::find()->where(['>=', 'created_at', date('Y-m-d H:i:s', strtotime('-1 week'))])->count();
        $addedLastMonth = Refugee::find()->where(['>=', 'created_at', date('Y-m-d H:i:s', strtotime('-1 month'))])->count();
        $addedLastYear = Refugee::find()->where(['>=', 'created_at', date('Y-m-d H:i:s', strtotime('-1 year'))])->count();
    
        return $this->render('index', [
            'totalCamps' => $totalCamps,
            'totalRefugees' => $totalRefugees,
            'totalUsers' => $totalUsers,
            'foreignTours' => $foreignTours,
            'visitsToIOJK' => $visitsToIOJK,
            'guestsFromIOJK' => $guestsFromIOJK,
            'addedLastWeek' => $addedLastWeek,
            'addedLastMonth' => $addedLastMonth,
            'addedLastYear' => $addedLastYear,
        ]);
    }

    public function actionForm_home()
    {
        $model = new \app\models\Refugee();
    
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // form inputs are valid, handle data as needed
            return;
        }
    
        return $this->render('form_home', [
            'model' => $model,
        ]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
