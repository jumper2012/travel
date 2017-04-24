<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailPackagePrice;

/**
 * DetailPackagePriceSearch represents the model behind the search form about `common\models\DetailPackagePrice`.
 */
class DetailPackagePriceSearch extends DetailPackagePrice
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_package_price_id', 'tour_package_id'], 'integer'],
            [['service_name', 'descriptiom'], 'safe'],
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
        $query = DetailPackagePrice::find();

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
            'detail_package_price_id' => $this->detail_package_price_id,
            'tour_package_id' => $this->tour_package_id,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'service_name', $this->service_name])
            ->andFilterWhere(['like', 'descriptiom', $this->descriptiom]);

        return $dataProvider;
    }
}
