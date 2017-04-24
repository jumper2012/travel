<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "travel_package".
 *
 * @property integer $travel_package_id
 * @property string $travel_package_name
 * @property integer $city_id
 * @property double $total_price
 * @property integer $minimum_person
 * @property string $duration
 * @property string $quick_break
 * @property string $running_periode_start
 * @property string $running_periode_end
 * @property string $book_until
 * @property string $description
 * @property string $agenda
 * @property string $detail
 * @property string $maps
 * @property string $room
 * @property string $prepare
 * @property string $terms
 *
 * @property DetailPackagePrice[] $detailPackagePrices
 * @property Orderlist[] $orderlist
 * @property City $city
 * @property TravelPlc[] $travelPlcs
 */
class TravelPackage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel_package';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travel_package_name', 'city_id', 'total_price', 'minimum_person', 'duration', 'quick_break', 'running_periode_start', 'running_periode_end', 'book_until', 'description', 'agenda', 'detail', 'maps', 'room', 'prepare', 'terms'], 'required'],
            [['city_id', 'minimum_person'], 'integer'],
            [['total_price'], 'number'],
            [['running_periode_start', 'running_periode_end', 'book_until'], 'safe'],
            [['description', 'agenda', 'detail', 'maps', 'room', 'prepare', 'terms'], 'string'],
            [['travel_package_name', 'duration', 'quick_break'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'travel_package_id' => 'Travel Package ID',
            'travel_package_name' => 'Travel Package Name',
            'city_id' => 'City ID',
            'total_price' => 'Total Price',
            'minimum_person' => 'Minimum Person',
            'duration' => 'Duration',
            'quick_break' => 'Quick Break',
            'running_periode_start' => 'Running Periode Start',
            'running_periode_end' => 'Running Periode End',
            'book_until' => 'Book Until',
            'description' => 'Description',
            'agenda' => 'Agenda',
            'detail' => 'Detail',
            'maps' => 'Maps',
            'room' => 'Room',
            'prepare' => 'Prepare',
            'terms' => 'Terms',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPackagePrices()
    {
        return $this->hasMany(DetailPackagePrice::className(), ['tour_package_id' => 'travel_package_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(OrderList::className(), ['tour_package_id' => 'travel_package_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravelPlcs()
    {
        return $this->hasMany(TravelPlc::className(), ['travel_package_id' => 'travel_package_id']);
    }
}
