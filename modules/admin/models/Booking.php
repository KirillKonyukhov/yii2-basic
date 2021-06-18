<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $idbooking
 * @property string|null $client
 * @property string|null $firm
 * @property string|null $document
 * @property int $nomer_komanatii
 * @property int $id_complaints
 * @property int $id_sotrudnik
 * @property int $id_hotels
 * @property int $dolg
 * @property int $id_uslugis
 * @property string|null $data_zas
 * @property string|null $data_vis
 * @property string|null $skidka
 * @property string|null $kolvo_mest
 * @property string|null $data_booking
 *
 * @property Hotel $hotels
 * @property Complaint $complaints
 * @property Nomera $nomerKomanatii
 * @property Sotrudnik $sotrudnik
 * @property Uslugi $uslugis
 * @property Zatrat $dolg0
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomer_komanatii', 'id_complaints', 'id_sotrudnik', 'id_hotels', 'dolg', 'id_uslugis'], 'required'],
            [['nomer_komanatii', 'id_complaints', 'id_sotrudnik', 'id_hotels', 'dolg', 'id_uslugis'], 'integer'],
            [['data_zas', 'data_vis', 'data_booking'], 'safe'],
            [['client', 'firm', 'document'], 'string', 'max' => 30],
            [['skidka'], 'string', 'max' => 50],
            [['kolvo_mest'], 'string', 'max' => 20],
            [['id_hotels'], 'exist', 'skipOnError' => true, 'targetClass' => Hotel::className(), 'targetAttribute' => ['id_hotels' => 'id_hotel']],
            [['id_complaints'], 'exist', 'skipOnError' => true, 'targetClass' => Complaint::className(), 'targetAttribute' => ['id_complaints' => 'id_complaint']],
            [['nomer_komanatii'], 'exist', 'skipOnError' => true, 'targetClass' => Nomera::className(), 'targetAttribute' => ['nomer_komanatii' => 'nomer_komanati']],
            [['id_sotrudnik'], 'exist', 'skipOnError' => true, 'targetClass' => Sotrudnik::className(), 'targetAttribute' => ['id_sotrudnik' => 'id_sotrudnik']],
            [['id_uslugis'], 'exist', 'skipOnError' => true, 'targetClass' => Uslugi::className(), 'targetAttribute' => ['id_uslugis' => 'id_uslugi']],
            [['dolg'], 'exist', 'skipOnError' => true, 'targetClass' => Zatrat::className(), 'targetAttribute' => ['dolg' => 'dolg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbooking' => 'ID',
            'client' => 'Клиент',
            'firm' => 'Фирма',
            'document' => 'Документ',
            'nomer_komanatii' => 'Номер комнаты',
            'id_complaints' => 'Жалоба',
            'id_sotrudnik' => 'Сотрудник',
            'id_hotels' => 'Отель',
            'dolg' => 'Долг',
            'id_uslugis' => 'Услуги',
            'data_zas' => 'Дата заселения',
            'data_vis' => 'Дата выселения',
            'skidka' => 'Скидка',
            'kolvo_mest' => 'Количество мест',
            'data_booking' => 'Дата бронирования',
        ];
    }

    /**
     * Gets query for [[Hotels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHotels()
    {
        return $this->hasOne(Hotel::className(), ['id_hotel' => 'id_hotels']);
    }

    /**
     * Gets query for [[Complaints]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComplaints()
    {
        return $this->hasOne(Complaint::className(), ['id_complaint' => 'id_complaints']);
    }

    /**
     * Gets query for [[NomerKomanatii]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNomerKomanatii()
    {
        return $this->hasOne(Nomera::className(), ['nomer_komanati' => 'nomer_komanatii']);
    }

    /**
     * Gets query for [[Sotrudnik]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSotrudnik()
    {
        return $this->hasOne(Sotrudnik::className(), ['id_sotrudnik' => 'id_sotrudnik']);
    }

    /**
     * Gets query for [[Uslugis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUslugis()
    {
        return $this->hasOne(Uslugi::className(), ['id_uslugi' => 'id_uslugis']);
    }

    /**
     * Gets query for [[Dolg0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDolg0()
    {
        return $this->hasOne(Zatrat::className(), ['dolg' => 'dolg']);
    }
}
