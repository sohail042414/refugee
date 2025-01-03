<?php
namespace app\controllers;


use app\models\BankAccount;
use app\models\Business;
use app\models\ChildrenKashmirEducation;
use app\models\Economy;
use app\models\ForeignTravel;
use app\models\IijokGuest;
use app\models\Job;
use app\models\PoliceCase;
use app\models\Property;
use app\models\RentalHouse;
use app\models\Scholarship;
use Yii;
use yii\filters\AccessControl;
use app\models\Refugee;
use app\models\Spouse;
use app\models\ChildrenMarried;
use app\models\Children;
use app\models\FamilyMember;
use app\models\SearchRefugee;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Inlaw;

class RefugeeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'create-spouse', 'create-children',
                        'create-married-children', 'create-family-member', 'create-in-law', 'create-scholarship',
                        'create-children-kashmir-education','create-job', 'create-business', 'create-rental-house',
                        'create-property', 'create-economy', 'create-bank-account', 'create-foreign-travel',
                        'create-iijok-guest', 'create-police-case', 
                        ],
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
        if ($model->load(Yii::$app->request->post())) {
            $model->status = 'create-spouse';
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Refugee basic information created, next step, enter spouse information.');
                return $this->redirect(['create-spouse', 'refugee_id' => $model->id]);
            }
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
        $post = Yii::$app->request->post();
        if ($model->load($post) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Spouse Information created successfully.');
            if (isset($post['next'])) {
                $refugee->status = 'create-children';
                $refugee->update(false);
                return $this->redirect(['create-children', 'refugee_id' => $refugee->id]);
            } else {
                return $this->refresh();
            }
        }
        return $this->render('create_spouse', [
            'model' => $model,
            'refugee' => $refugee
        ]);
    }


    public function actionCreateChildren($refugee_id)
    {
        $model = new Children();
        $refugee = $this->findModel($refugee_id);
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Child information saved successfully.');
                if (isset($post['next'])) {
                    $refugee->status = 'married-children';
                    $refugee->update(FALSE);
                    return $this->redirect(['create-married-children', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }

        return $this->render('create_children', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }


    public function actionCreateMarriedChildren($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new ChildrenMarried();

        $model->refugee_id = $refugee_id;

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Married children information saved successfully.');
                if (isset($post['next'])) {
                    $refugee->status = 'family-members';
                    $refugee->update();
                    return $this->redirect(['create-family-member', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('married_children', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }


    public function actionCreateFamilyMember($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new FamilyMember();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'family members information saved successfully.');
                if (isset($post['next'])) {
                    $refugee->status = 'in-law';
                    $refugee->update();
                    return $this->redirect(['create-in-law', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('family_members', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }




    public function actionCreateInLaw($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Inlaw();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'In law information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-scholarship', 'refugee_id' => $refugee_id]);
                    // return $this->refresh();
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('in-law', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }


    public function actionCreateScholarship($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Scholarship();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Scholarship information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-children-kashmir-education', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('scholarship', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }


    

    

    public function actionCreateChildrenKashmirEducation($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new ChildrenKashmirEducation();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Children kashmir education information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-job', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('children_kashmir_education', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }

    






    public function actionCreateJob($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Job();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Job information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-business', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('create-job', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }



    
    public function actionCreateBusiness($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Business();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Business information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-economy', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('create-business', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }





    public function actionCreateEconomy($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Economy();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Economy information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-rental-house', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('create-economy', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }





    public function actionCreateRentalHouse($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new RentalHouse();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Rental house information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-property', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('rental_house', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }




    public function actionCreateProperty($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new Property();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Property information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-bank-account', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('create_property', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }







    public function actionCreateBankAccount($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new BankAccount();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Bank Account information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-foreign-travel', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('bank_account', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }





    public function actionCreateForeignTravel($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new ForeignTravel();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Foreign Travel information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-iijok-guest', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('foreign_travel', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }






    
    public function actionCreateIijokGuest($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new IijokGuest();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'IIJOK Guest information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    return $this->redirect(['create-police-case', 'refugee_id' => $refugee_id]);
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('iijok_guest', [
            'model' => $model,
            'refugee' => $refugee,
        ]);
    }



    public function actionCreatePoliceCase($refugee_id)
    {
        $refugee = $this->findModel($refugee_id);
        $model = new PoliceCase();
        $model->refugee_id = $refugee_id;
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Police Case information saved successfully.');
                if (Yii::$app->request->post('next')) {
                    // return $this->redirect(['/in-laws', 'refugee_id' => $refugee_id]);
                    return $this->refresh();
                } else {
                    return $this->refresh();
                }
            }
        }
        return $this->render('police_case', [
            'model' => $model,
            'refugee' => $refugee,
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
