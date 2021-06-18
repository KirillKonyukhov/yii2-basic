<?php
namespace App\Models;
use yii\db\ActiveRecord;
class booking extends ActiveRecord
{
public $data_booking;
public $data1;
public $data2;
//public $kolvo_mest;
public $n;
public $firm1;
public $id_hotel1;
public $client1;
public function rules(){
		return [
			['kolvo', 'trim'],
                        [['data_booking','data1','data2','n','firm1','id_hotel1','client1'], 'trim'],
		];
	}
public function getComplaint()
    {
        return $this->hasOne(Complaint::className(), ['id_complaints' => 'id_complaint']);
    }
public function getNomera()
    {
        return $this->hasOne(Nomera::className(), ['nomer_komanatii' => 'nomer_komanati']);
    }
public static function tableName()
    {
        return "booking";
    }
}
