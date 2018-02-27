<?php 

namespace backend\models;

use yii;

class Customer extends \yii\db\ActiveRecord
{
    public static function collectionName() #static itu sesuatu yang tak bisa diubah
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