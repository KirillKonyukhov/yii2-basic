<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "nomera".
 *
 * @property int $nomer_komanati
 * @property string|null $mestnost_nomera
 * @property string|null $etag
 * @property string|null $booking
 *
 * @property Booking[] $bookings
 */
class Nomera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nomera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mestnost_nomera', 'etag'], 'string', 'max' => 30],
            [['booking'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomer_komanati' => 'Номер комнаты',
            'mestnost_nomera' => 'Местность номера',
            'etag' => 'Этаж',
            'booking' => 'Бронь',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['nomer_komanatii' => 'nomer_komanati']);
    }
}
