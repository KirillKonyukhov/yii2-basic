<?php
namespace App\Models;
use yii\db\ActiveRecord;
class nomera extends ActiveRecord
{
public $data1;
public $data2;
//public $etag;
public $n;
public function rules(){
		return [
                        [['data1','data2','etag','n'], 'trim'],
		];
	}
public static function tableName()
    {
        return "nomera";
    }
}
