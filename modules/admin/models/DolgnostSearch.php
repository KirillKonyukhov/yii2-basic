<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Dolgnost;

/**
 * DolgnostSearch represents the model behind the search form of `app\modules\admin\models\Dolgnost`.
 */
class DolgnostSearch extends Dolgnost
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dolgnost'], 'integer'],
            [['name_dolgnosti', 'opisanie_dolgnosti'], 'safe'],
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
        $query = Dolgnost::find();

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
            'id_dolgnost' => $this->id_dolgnost,
        ]);

        $query->andFilterWhere(['like', 'name_dolgnosti', $this->name_dolgnosti])
            ->andFilterWhere(['like', 'opisanie_dolgnosti', $this->opisanie_dolgnosti]);

        return $dataProvider;
    }
}
