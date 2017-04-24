<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "travel_pic".
 *
 * @property integer $travel_pic_id
 * @property integer $travel_package_id
 * @property string $pic_name
 *
 * @property TravelPackage $travelPackage
 */
class TravelPic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel_pic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travel_package_id', 'pic_name'], 'required'],
            [['travel_package_id'], 'integer'],
            [['pic_name'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'travel_pic_id' => 'Travel Pic ID',
            'travel_package_id' => 'Travel Package ID',
            'pic_name' => 'Pic Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravelPackage()
    {
        return $this->hasOne(TravelPackage::className(), ['travel_package_id' => 'travel_package_id']);
    }
}
