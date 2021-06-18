<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sotrudnik".
 *
 * @property int $id_sotrudnik
 * @property string|null $FIO_S
 * @property int $id_dolgnost
 * @property string|null $seria_passport_s
 * @property string|null $nomer_passport_s
 * @property string|null $birth_sotrudnik_s
 *
 * @property Booking[] $bookings
 * @property Dolgnost $dolgnost
 */
class Sotrudnik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sotrudnik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dolgnost'], 'required'],
            [['id_dolgnost'], 'integer'],
            [['birth_sotrudnik_s'], 'safe'],
            [['FIO_S', 'seria_passport_s', 'nomer_passport_s'], 'string', 'max' => 20],
            [['id_dolgnost'], 'exist', 'skipOnError' => true, 'targetClass' => Dolgnost::className(), 'targetAttribute' => ['id_dolgnost' => 'id_dolgnost']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sotrudnik' => 'ID',
            'FIO_S' => 'ФИО Сотрудника',
            'id_dolgnost' => 'Должность',
            'seria_passport_s' => 'Серия пасспорта',
            'nomer_passport_s' => 'Номер пасспорта',
            'birth_sotrudnik_s' => 'День рождения',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['id_sotrudnik' => 'id_sotrudnik']);
    }

    /**
     * Gets query for [[Dolgnost]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDolgnost()
    {
        return $this->hasOne(Dolgnost::className(), ['id_dolgnost' => 'id_dolgnost']);
    }
}
