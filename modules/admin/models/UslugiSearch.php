<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Uslugi;

/**
 * UslugiSearch represents the model behind the search form of `app\modules\admin\models\Uslugi`.
 */
class UslugiSearch extends Uslugi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_uslugi'], 'integer'],
            [['name_uslugi', 'opisanie_uslugi', 'price_uslugi'], 'safe'],
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
        $query = Uslugi::find();

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
            'id_uslugi' => $this->id_uslugi,
        ]);

        $query->andFilterWhere(['like', 'name_uslugi', $this->name_uslugi])
            ->andFilterWhere(['like', 'opisanie_uslugi', $this->opisanie_uslugi])
            ->andFilterWhere(['like', 'price_uslugi', $this->price_uslugi]);

        return $dataProvider;
    }
}
