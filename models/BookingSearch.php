<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\modules\admin\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public $name_hotel;
    public $data_complaint;
    public $FIO_S;
    public $name_uslugi;
    public function rules()
    {
        return [
            [['idbooking', 'nomer_komanatii', 'id_complaints', 'id_sotrudnik', 'id_hotels', 'dolg', 'id_uslugis'], 'integer'],
            [['client', 'firm', 'document', 'data_zas', 'data_vis', 'skidka', 'kolvo_mest', 'data_booking','name_hotel','data_complaint','FIO_S','name_uslugi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Booking::find()
        ->joinWith('sotrudnik')
        ->joinWith('uslugis')
        ->joinWith('hotels')
        ->joinWith('complaints');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 3
            ]
        ]);

        $dataProvider->sort->attributes['name_hotel'] = [
            'asc' => ['hotel.name_hotel' => SORT_ASC],
            'desc' => ['hotel.name_hotel' => SORT_DESC]];


        $dataProvider->sort->attributes['data_complaint'] = [
            'asc' => ['complaint.data_comlaint' => SORT_ASC],
            'desc' => ['complaint.data_complaint' => SORT_DESC]]; 

        $dataProvider->sort->attributes['FIO_S'] = [
            'asc' => ['sotrudnik.FIO_S' => SORT_ASC],
            'desc' => ['sotrudnik.FIO_S' => SORT_DESC]]; 

         $dataProvider->sort->attributes['name_uslugi'] = [
            'asc' => ['uslugi.name_uslugi' => SORT_ASC],
            'desc' => ['uslugi.name_uslugi' => SORT_DESC]]; 
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idbooking' => $this->idbooking,
            'nomer_komanatii' => $this->nomer_komanatii,
            'complaint.data_complaint' => $this->data_complaint,
            'sotrudnik.FIO_S' => $this->FIO_S,
            'hotel.name_hotel' => $this->name_hotel,
            'dolg' => $this->dolg,
            'uslugi.name_uslugi' => $this->name_uslugi,
            'data_zas' => $this->data_zas,
            'data_vis' => $this->data_vis,
            'data_booking' => $this->data_booking,
        ]);

        $query->andFilterWhere(['like', 'client', $this->client])
            ->andFilterWhere(['like', 'firm', $this->firm])
            ->andFilterWhere(['like', 'document', $this->document])
            ->andFilterWhere(['like', 'skidka', $this->skidka])
            ->andFilterWhere(['like', 'kolvo_mest', $this->kolvo_mest])
            ->andFilterWhere(['like', 'uslugi.name_uslugi', $this->name_uslugi])
            ->andFilterWhere(['like', 'sotrudnik.FIO_S', $this->FIO_S])
            ->andFilterWhere(['like', 'complaint.data_complaint', $this->data_complaint])
            ->andFilterWhere(['like', 'hotel.name_hotel', $this->name_hotel]);

        return $dataProvider;
    }
}
