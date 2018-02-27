<?php 

namespace backend\models;

use yii;

class Rent extends \yii\db\ActiveRecord
{
    public static function collectionName()
    {
        return ['bookstore', 'rent'];
    }

    public function attributes()
    {
        return [
            '_id',
            'customer',
            'books',
            'start_at',
            'price',
            'charge',
            'status',            
        ];
    }

    public function rules()
    {
        return [
            [['_id', 'customer', 'books', 'start_at', 'price', 'charge', 'status'], 'safe']
        ];
    }
}