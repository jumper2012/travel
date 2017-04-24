<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TravelPic;

/**
 * TravelPicSearch represents the model behind the search form about `common\models\TravelPic`.
 */
class TravelPicSearch extends TravelPic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travel_pic_id', 'travel_package_id'], 'integer'],
            [['pic_name'], 'safe'],
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
        $query = TravelPic::find();

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
            'travel_pic_id' => $this->travel_pic_id,
            'travel_package_id' => $this->travel_package_id,
        ]);

        $query->andFilterWhere(['like', 'pic_name', $this->pic_name]);

        return $dataProvider;
    }
}
