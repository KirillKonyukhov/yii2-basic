<?php
namespace App\Models;
use yii\db\ActiveRecord;
class hotel extends ActiveRecord
{
public $data_booking;
public $data1;
public $data2;
public $kolvo_mest;
public $n;
public $firm1;
public $id_hotel1;
public function rules(){
		return [
			['kolvo_mest', 'trim'],
                        [['data_booking','data1','data2','n','firm1','id_hotel1'], 'trim'],
		];
	}
public static function tableName()
    {
        return "hotel";
    }
}
