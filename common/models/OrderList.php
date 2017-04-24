<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_list".
 *
 * @property integer $order_id
 * @property integer $tour_package_id
 * @property string $arrival_date
 * @property string $departure_date
 * @property integer $account_id
 * @property string $special_request
 * @property double $total_price
 * @property string $order_code
 * @property string $proof_of_payment
 * @property integer $status_verificatio
 *
 * @property DetailOrder[] $detailOrders
 * @property Account $account
 * @property TravelPackage $tourPackage
 */
class OrderList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_package_id', 'arrival_date', 'departure_date', 'account_id', 'special_request', 'total_price', 'order_code', 'proof_of_payment', 'status_verificatio'], 'required'],
            [['tour_package_id', 'account_id', 'status_verificatio'], 'integer'],
            [['arrival_date', 'departure_date'], 'safe'],
            [['special_request'], 'string'],
            [['total_price'], 'number'],
            [['order_code', 'proof_of_payment'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'tour_package_id' => 'Tour Package ID',
            'arrival_date' => 'Arrival Date',
            'departure_date' => 'Departure Date',
            'account_id' => 'Account ID',
            'special_request' => 'Special Request',
            'total_price' => 'Total Price',
            'order_code' => 'Order Code',
            'proof_of_payment' => 'Proof Of Payment',
            'status_verificatio' => 'Status Verificatio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailOrders()
    {
        return $this->hasMany(DetailOrder::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['account_id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourPackage()
    {
        return $this->hasOne(TravelPackage::className(), ['travel_package_id' => 'tour_package_id']);
    }
}
