<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Nomera;

/**
 * NomeraSearch represents the model behind the search form of `app\modules\admin\models\Nomera`.
 */
class NomeraSearch extends Nomera
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomer_komanati'], 'integer'],
            [['mestnost_nomera', 'etag', 'booking'], 'safe'],
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
        $query = Nomera::find();

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
            'nomer_komanati' => $this->nomer_komanati,
        ]);

        $query->andFilterWhere(['like', 'mestnost_nomera', $this->mestnost_nomera])
            ->andFilterWhere(['like', 'etag', $this->etag])
            ->andFilterWhere(['like', 'booking', $this->booking]);

        return $dataProvider;
    }
}
