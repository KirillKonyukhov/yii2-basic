<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "zatrat".
 *
 * @property int $dolg
 * @property string|null $opisanie
 *
 * @property Booking[] $bookings
 */
class Zatrat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zatrat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['opisanie'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dolg' => 'Долг',
            'opisanie' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['dolg' => 'dolg']);
    }
}
