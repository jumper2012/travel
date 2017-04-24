<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_order".
 *
 * @property integer $detail_order_id
 * @property integer $order_id
 * @property integer $detail_package_price_id
 * @property integer $count
 * @property double $price
 *
 * @property OrderList $orderlist
 */
class DetailOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'detail_package_price_id', 'count', 'price'], 'required'],
            [['order_id', 'detail_package_price_id', 'count'], 'integer'],
            [['price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detail_order_id' => 'Detail Order ID',
            'order_id' => 'Order ID',
            'detail_package_price_id' => 'Detail Package Price ID',
            'count' => 'Count',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(OrderList::className(), ['order_id' => 'order_id']);
    }
}
