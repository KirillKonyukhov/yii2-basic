<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "complaint".
 *
 * @property int $id_complaint
 * @property string|null $opisanie_complaint
 * @property string|null $data_complaint
 *
 * @property Booking[] $bookings
 */
class Complaint extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complaint';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_complaint'], 'safe'],
            [['opisanie_complaint'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_complaint' => 'ID',
            'opisanie_complaint' => 'Описание жалобы',
            'data_complaint' => 'Дата жалобы',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['id_complaints' => 'id_complaint']);
    }
}
