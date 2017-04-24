<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OrderList;

/**
 * OrderListSearch represents the model behind the search form about `common\models\OrderList`.
 */
class OrderListSearch extends OrderList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'tour_package_id', 'account_id', 'status_verificatio'], 'integer'],
            [['arrival_date', 'departure_date', 'special_request', 'order_code', 'proof_of_payment'], 'safe'],
            [['total_price'], 'number'],
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
        $query = OrderList::find();

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
            'order_id' => $this->order_id,
            'tour_package_id' => $this->tour_package_id,
            'arrival_date' => $this->arrival_date,
            'departure_date' => $this->departure_date,
            'account_id' => $this->account_id,
            'total_price' => $this->total_price,
            'status_verificatio' => $this->status_verificatio,
        ]);

        $query->andFilterWhere(['like', 'special_request', $this->special_request])
            ->andFilterWhere(['like', 'order_code', $this->order_code])
            ->andFilterWhere(['like', 'proof_of_payment', $this->proof_of_payment]);

        return $dataProvider;
    }
}
