<?php
namespace App\Models;
use yii\db\ActiveRecord;
class booking extends ActiveRecord
{
public $data_booking;
public $data1;
public $data2;
public $kolvo_mest;
public function rules(){
		return [
			['kolvo_mest', 'trim'],
                        [['data_booking','data1','data2'], 'trim'],
		];
	}
public function getComplaint()
    {
        return $this->hasOne(Complaint::className(), ['id_complaint' => 'id_complaint']);
    }
public static function tableName()
    {
        return "booking";
    }
}
