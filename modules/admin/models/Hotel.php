<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id_hotel
 * @property string|null $name_hotel
 * @property string|null $klass_hotel
 * @property int|null $kolvo_nomer
 * @property int|null $kolvo_nomer_na_etage
 * @property int|null $kolvo_odnomestnih_nomer
 * @property int|null $kolvo_dvuhmestnih_nomer
 * @property int|null $kolvo_trehmestnih_nomer
 *
 * @property Booking[] $bookings
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kolvo_nomer', 'kolvo_nomer_na_etage', 'kolvo_odnomestnih_nomer', 'kolvo_dvuhmestnih_nomer', 'kolvo_trehmestnih_nomer'], 'integer'],
            [['name_hotel'], 'string', 'max' => 50],
            [['klass_hotel'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hotel' => 'ID',
            'name_hotel' => 'Название отеля',
            'klass_hotel' => 'Класс отеля',
            'kolvo_nomer' => 'Номеров',
            'kolvo_nomer_na_etage' => 'Номеров на этаже',
            'kolvo_odnomestnih_nomer' => '1-ых номеров',
            'kolvo_dvuhmestnih_nomer' => '2-ых номеров',
            'kolvo_trehmestnih_nomer' => '3-ых номеров',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['id_hotels' => 'id_hotel']);
    }
}
