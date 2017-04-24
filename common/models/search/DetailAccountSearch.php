<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailAccount;

/**
 * DetailAccountSearch represents the model behind the search form about `common\models\DetailAccount`.
 */
class DetailAccountSearch extends DetailAccount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_account_id', 'account_id', 'country_id'], 'integer'],
            [['first_name', 'last_name', 'email', 'telepon', 'date_of_birth'], 'safe'],
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
        $query = DetailAccount::find();

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
            'detail_account_id' => $this->detail_account_id,
            'account_id' => $this->account_id,
            'date_of_birth' => $this->date_of_birth,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telepon', $this->telepon]);

        return $dataProvider;
    }
}
