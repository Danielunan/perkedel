<?php 

namespace backend\controllers; 

use Yii;
use yii\web\Controller; 
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Rent;
use backend\models\Book;
use backend\models\Customer;

class BookstoreController extends Controller 
{
    public function behaviors()
    {
        return [

        ];
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
        $request = Yii::$app->request; 
        $search = $request->get('search', null);
        $session = Yii::$app->session;

        if ($session->has('user')) {
            $user = $session->get('user');
        } else {
            $user = null;
        }

        $query = book::find();
        if ($search != null) {
            $query->where(["name" => $search]);
        }
        $result = $query->all();

        echo $search;

        return $this->render('index', [
            'input' => $search,
            'result' => $result,
            'user' => $user,
        ]);
    }

    public function actionHistory()
    {
        $search = yII::$app->request;
        $search = $request->get('search', null);
        $session = Yii::$app->session;

        if ($session->has('user')) {
            $user = $session->get('user');
            $rent = Rent::find(['customer' => $user['_id']])->all();
            return $this->render('history', [
                'result' => $rent,
                'user' => $user,
            ]);
        } else {
            $user = null;
        }
    }

    public function actionRent()
    {
        $request = Yii::$app->request;
        $book_json = $request->post('books', null);
        $books = json_encode($book_json);

        $rent = new Rent();
        $rent->customer = Yii::$app->session->get('user')['_id'];
        $rent->start_at = date('m-d-y', strtotime("now"));
        $b = array();
        foreach ($books as $book) {
            $t = array();
            $bookq = book::findOne($book);
            
            $t['book_id'] = $bookq['_id'];
            $t['end_date'] = date('m-d-y', strtotime("+".$bookq['days']."day"));
            $t['price'] = $bookq['price'];
            $t['charge'] = $bookq['charge'];
            $t['status'] = "pengiriman";
            array_push($b,$t);
        }
        $rent->books = $b;
        echo $rent->save();
    }

    public function actionCancel()
    {
        $baseUrl = \Yii::getAlias('@web'); 
        $request = Yii::$app->request;
        $id = $request->get('id', null);
        $book_ar = $request->get('book_ar', null);
        $message = 'batalkan pengiriman';
        $rent = Rent::findOne($id);
        $t = $rent['books'];
        $t[$book_ar]['status'] = $message;
        $rent->books = $t;
        $rent->save();
        return $this->redirect($baseUrl."/bookstore/history");        
    }
}