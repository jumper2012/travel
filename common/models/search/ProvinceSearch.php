<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Province;

/**
 * ProvinceSearch represents the model behind the search form about `common\models\Province`.
 */
class ProvinceSearch extends Province
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id', 'country_id'], 'integer'],
            [['province_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Province::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'province_id' => $this->province_id,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'province_name', $this->province_name]);

        return $dataProvider;
    }
}
