<?php 

namespace backend\models;

use yii;

class Customer extends \yii\db\ActiveRecord
{
    #static itu sesuatu yang tak bisa diubah
    public static function collectionName() 
    {
        return ['bookstore', 'customer'];
    }

    public function attributes()
    {
        return [
            '_id',
            'firstname',
            'lastname',
            'phone',
            'email',
            'password',
            'address',       
        ];
    }

    public function rules() #rules itu memvalidasi data atribut
    {
        return [
            [['_id', 'firstname', 'lastname', 'phone', 'email', 'password', 'address',],'safe']
        ];
    }
}

?>