<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Sotrudnik;

/**
 * SotrudnikSearch represents the model behind the search form of `app\modules\admin\models\Sotrudnik`.
 */
class SotrudnikSearch extends Sotrudnik
{
    /**
     * {@inheritdoc}
     */
    public $name_dolgnosti;
    public function rules()
    {
        return [
            [['id_sotrudnik', 'id_dolgnost'], 'integer'],
            [['FIO_S', 'seria_passport_s', 'nomer_passport_s', 'birth_sotrudnik_s','name_dolgnosti'], 'safe'],
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
        $query = Sotrudnik::find()
        ->joinWith('dolgnost');

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

        $dataProvider->sort->attributes['name_dolgnosti'] = [
            'asc' => ['dolgnost.name_dolgnosti' => SORT_ASC],
            'desc' => ['dolgnost.name_dolgnosti' => SORT_DESC]];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_sotrudnik' => $this->id_sotrudnik,
            'dolgnost.name_dolgnosti' => $this->name_dolgnosti,
            'birth_sotrudnik_s' => $this->birth_sotrudnik_s,
        ]);

        $query->andFilterWhere(['like', 'FIO_S', $this->FIO_S])
            ->andFilterWhere(['like', 'seria_passport_s', $this->seria_passport_s])
            ->andFilterWhere(['like', 'dolgnost.name_dolgnosti', $this->name_dolgnosti])
            ->andFilterWhere(['like', 'nomer_passport_s', $this->nomer_passport_s]);

        return $dataProvider;
    }
}
