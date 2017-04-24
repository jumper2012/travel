<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailOrder;

/**
 * DetailOrderSearch represents the model behind the search form about `common\models\DetailOrder`.
 */
class DetailOrderSearch extends DetailOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_order_id', 'order_id', 'detail_package_price_id', 'count'], 'integer'],
            [['price'], 'number'],
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
        $query = DetailOrder::find();

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
            'detail_order_id' => $this->detail_order_id,
            'order_id' => $this->order_id,
            'detail_package_price_id' => $this->detail_package_price_id,
            'count' => $this->count,
            'price' => $this->price,
        ]);

        return $dataProvider;
    }
}
