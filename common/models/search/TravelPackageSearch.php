<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TravelPackage;

/**
 * TravelPackageSearch represents the model behind the search form about `common\models\TravelPackage`.
 */
class TravelPackageSearch extends TravelPackage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travel_package_id', 'city_id', 'minimum_person'], 'integer'],
            [['travel_package_name', 'duration', 'quick_break', 'running_periode_start', 'running_periode_end', 'book_until', 'description', 'agenda', 'detail', 'maps', 'room', 'prepare', 'terms'], 'safe'],
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
        $query = TravelPackage::find();

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
            'travel_package_id' => $this->travel_package_id,
            'city_id' => $this->city_id,
            'total_price' => $this->total_price,
            'minimum_person' => $this->minimum_person,
            'running_periode_start' => $this->running_periode_start,
            'running_periode_end' => $this->running_periode_end,
            'book_until' => $this->book_until,
        ]);

        $query->andFilterWhere(['like', 'travel_package_name', $this->travel_package_name])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'quick_break', $this->quick_break])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'agenda', $this->agenda])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'maps', $this->maps])
            ->andFilterWhere(['like', 'room', $this->room])
            ->andFilterWhere(['like', 'prepare', $this->prepare])
            ->andFilterWhere(['like', 'terms', $this->terms]);

        return $dataProvider;
    }
}
