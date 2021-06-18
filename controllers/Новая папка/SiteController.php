<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
 public function actionInfo(){
    $a = 'Hello';
    $this->view->title = 'Информация';
    return $this->render('info', ['a' => $a]);
  }
public function actionLab1(){
    $this->view->title = 'Лабораторная 1';
    $model = new EntryForm();
     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        //Yii::$app->session->setFlash('success', 'Данные успешно приняты');
        //Yii::$app->session->set('success', 'Успешно');
        //$session = Yii::$app -> session;
        //$session -> set('success', 'success');
        if (Yii::$app->request->post('EntryForm'));
        return $this->render('lab1', compact('model'));
     } else {
       //Yii::$app->session->set('error', 'Ошибка');
        // Yii::$app->session->setFlash('error', 'Ошибка');
         return $this->render('lab1', compact('model'));
       }
  }

  public function actionLab2(){
    $this->view->title = 'Лабораторная 2';
    return $this->render('lab2');
    }

  public function actionLab3(){
    $this->view->title = 'Лабораторная 3';
    //if(Yii ::$app->request->isAjax){
    //  debug($_GET);    }
    return $this->render('lab3');
    }
    public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }

public function actionEntry()
   {
       $model = new EntryForm();
       if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('entry-confirm', compact('model'));
       } else {
           return $this->render('entry', compact('model'));
       }
   }


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
        return $this->render('index');
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

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
