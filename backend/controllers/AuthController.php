<?php 

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Customer; 

class AuthController extends Controller
{
    public function behaviors()
    {
        return [

        ];
    }

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        return $this->render('register');
    }

    public function actionLogin()
    {
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');
        $session = Yii::$app->session;   
        
        if($session->has('user'))
        {
            return $this->redirecct($baseUrl."/");
        } else {
            return $this->render('login');
        }
    }

    public function actionLogout()
    {
        $session = Yii::$app->session();
        $baseUrl = \Yii::getAlias('@web');
        $session->remove('user');

        return $this->redirect($baseUrl."/");
    }

    public function actionLoginaction()
    {
        #config
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');
        $session = Yii::$app->session;

        $email = $request->post('email', null);
        $pass = $request->post('password', null);

        $customer = Customer::findOne(['email' => $email]);
        if(isset($customer) && (md5($pass) == $customer->password))
        {
            $session->set('user', $customer);
            $session->setFlash('success', "selamat datang");
            
            return $this->redirect($baseUrl."/");
        } else {
            $session->setFlash('danger', "username dan password tidak valid, silahkan login kembali");

            return $this->redirect($baseUrl."/auth/login");
        }
    }

    public function actionRegistersave()
    {
        #konfigurasi
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');

        #ambil id edit, bukan id yang baru 
        $fname = $request->get('firstname', null); 
        $lname = $request->get('lastname', null);
        $email = $request->get('email', null);
        $phone = $request->get('phone', null);
        $pass = $request->get('password', null);
        $address = $request->get('address', null);
        $customer = new customer;
        
        $customer->firstname = $fname;
        $customer->lastname = $lname;
        $customer->phone = $phone;
        $customer->email = $email;
        $customer->password = md5($pass);
        $customer->address = $address;

        if ($customer->save()) {
            echo "success";
        } else {
            echo "error";
        }

        return $this->redirect($baseUrl."/auth/login");
    }

    public function actionLoginsave()
    {
        #konfigurasi 
        $request = Yii::$app->request;
        $baseUrl = \Yii::getAlias('@web');
    }
}