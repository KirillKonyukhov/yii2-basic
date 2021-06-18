<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Hotel;

/**
 * HotelSearch represents the model behind the search form of `app\modules\admin\models\Hotel`.
 */
class HotelSearch extends Hotel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hotel', 'kolvo_nomer', 'kolvo_nomer_na_etage', 'kolvo_odnomestnih_nomer', 'kolvo_dvuhmestnih_nomer', 'kolvo_trehmestnih_nomer'], 'integer'],
            [['name_hotel', 'klass_hotel'], 'safe'],
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
        $query = Hotel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3
            ]
        ]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_hotel' => $this->id_hotel,
            'kolvo_nomer' => $this->kolvo_nomer,
            'kolvo_nomer_na_etage' => $this->kolvo_nomer_na_etage,
            'kolvo_odnomestnih_nomer' => $this->kolvo_odnomestnih_nomer,
            'kolvo_dvuhmestnih_nomer' => $this->kolvo_dvuhmestnih_nomer,
            'kolvo_trehmestnih_nomer' => $this->kolvo_trehmestnih_nomer,
        ]);

        $query->andFilterWhere(['like', 'name_hotel', $this->name_hotel])
            ->andFilterWhere(['like', 'klass_hotel', $this->klass_hotel]);

        return $dataProvider;
    }
}
