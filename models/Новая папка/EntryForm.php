<?php
namespace App\Models;
use yii\base\Model;

class EntryForm extends Model{
  public $name;
  public $email;
  public $age;
  public $data;
  public $kitchen;
  public $rec;
  public $text;

  public function attributeLabels(){
    return[
      'name' => 'Ваше имя:',
      'email' => 'Ваш e-mail:',
      'age' => 'Ваш возраст:',
      'data' => 'Дата посещения:',
      'kitchen' => 'Любимая кухня:',
      'rec' => 'Порекомендуете нас друзьям?',
      'text' => 'Текст отзыва:',
    ];
  }

  public function rules(){
    return[
      [['name', 'email','age', 'text', 'rec', 'kitchen', 'data'], 'required'],
      ['email', 'email'],
      ['age', 'integer', 'min' => 18, 'max' => 100],
      ['data', 'date', 'on' => ['create', 'update']],
      ['name', 'string', 'length' => [5,30]],
      ['text', 'trim'],
      [['kitchen', 'data', 'rec'], 'safe'],
      ];
    }
  }

?>
