<?php
namespace App\Models;
use yii\db\ActiveRecord;
class uslugi extends ActiveRecord
{
public $data_booking;
public $data1;
public $data2;
public $kolvo_mest;
public $n;
public $firm1;
public function rules(){
		return [
			['kolvo_mest', 'trim'],
                        [['data_booking','data1','data2','n','firm1'], 'trim'],
		];
	}
    }
public static function tableName()
    {
        return "uslugi";
    }
}
