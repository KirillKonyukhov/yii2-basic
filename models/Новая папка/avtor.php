<?php
namespace app\models;
use yii\db\ActiveRecord;
class avtor extends ActiveRecord
{
 public static function tableName()
    {
        return 'avtor';
    }
   public function rules()
    {
        return [
            [['FIO', 'birth','death'], 'required'],
            [['FIO'], 'trim'],
            ['avtor_id', 'integer', 'min' => 1, 'max' => 100],
            [['FIO'], 'string', 'max' => 255],
        ];
    }

}
