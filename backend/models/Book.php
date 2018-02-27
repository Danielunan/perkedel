<?php 

namespace backend\models;

use Yii;

class Book extends \yii\db\ActiveRecord
{
    public static function collectionName()
    {
        return ['bookstore','book'];
    }

    public function attributes()
    {
        return [
            '_id',
            'name',
            'version',
            'type',
            'price',
            'charge',
            'days',
            'total',
            'publisher',            
        ];
    }

    public function rules()
    {
        return [
            [[
                '_id', 'name', 
                'version', 'type', 
                'price', 'charge', 
                'days', 'total', 
                'publisher'],'safe']
            ];
    }
}
?>