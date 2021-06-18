<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "uslugi".
 *
 * @property int $id_uslugi
 * @property string|null $name_uslugi
 * @property string|null $opisanie_uslugi
 * @property string|null $price_uslugi
 *
 * @property Booking[] $bookings
 */
class Uslugi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uslugi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uslugi'], 'string', 'max' => 30],
            [['opisanie_uslugi'], 'string', 'max' => 200],
            [['price_uslugi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_uslugi' => 'ID',
            'name_uslugi' => 'Название услуги',
            'opisanie_uslugi' => 'Описание услуги',
            'price_uslugi' => 'Стоимость услуги',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['id_uslugis' => 'id_uslugi']);
    }
}
