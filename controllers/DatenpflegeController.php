<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\db\Modelt1;
use app\models\db\Modelt2;
use app\models\search\Modelt1Search;

class DatenpflegeController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

	public function actionD1()
	{
		$modelt1 = new Modelt1();
		$modelt2 = new Modelt2();
		$dataParamter['t1']['model'] = new Modelt1();
		$dataParamter['t1']['searchModel'] = new Modelt1Search();
		return $this->render('d1', ['modelt1' => $modelt1, 'modelt2' => $modelt2]);
	}

	public function actionD2()
	{
		//$modelt1 = new Modelt1();
		$searchModelt1 = new Modelt1Search();
		$dataProvidert1 = $searchModelt1->search(Yii::$app->request->get());
		return $this->render('d2', ['searchModel' => $searchModelt1, 'dataProvider' => $dataProvidert1]);
	}

    public function actionIndex()
    {
        return $this->render('index');
    }
}
?>