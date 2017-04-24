<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property integer $province_id
 * @property string $city_name
 *
 * @property Province $province
 * @property TravelPackage[] $travelPackages
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id', 'city_name'], 'required'],
            [['province_id'], 'integer'],
            [['city_name'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'province_id' => 'Province ID',
            'city_name' => 'City Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravelPackages()
    {
        return $this->hasMany(TravelPackage::className(), ['city_id' => 'city_id']);
    }
}
