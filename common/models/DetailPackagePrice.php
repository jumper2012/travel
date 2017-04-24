<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_package_price".
 *
 * @property integer $detail_package_price_id
 * @property integer $tour_package_id
 * @property string $service_name
 * @property double $price
 * @property string $descriptiom
 *
 * @property TravelPackage $tourPackage
 */
class DetailPackagePrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_package_price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_name', 'price', 'descriptiom'], 'required'],
            [['tour_package_id'], 'integer'],
            [['price'], 'number'],
            [['descriptiom'], 'string'],
            [['service_name'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detail_package_price_id' => 'Detail Package Price ID',
            'tour_package_id' => 'Tour Package ID',
            'service_name' => 'Service Name',
            'price' => 'Price',
            'descriptiom' => 'Descriptiom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourPackage()
    {
        return $this->hasOne(TravelPackage::className(), ['travel_package_id' => 'tour_package_id']);
    }
}
