<?php
namespace app\models;
use yii\db\ActiveRecord;
class books extends ActiveRecord
{
    public function rules(){
		return [
			['nazvanie','trim'],
		];
	}
    public $kolvo;
public function getGanr()
    {
        return $this->hasOne(Ganr::className(), ['ganr_id' => 'ganr_id']);
    }
public function getAvtor()
    {
        return $this->hasOne(Avtor::className(), ['avtor_id' => 'avtor_id']);
    }
    
public static function tableName()
    {
        return "books";
    }
}
