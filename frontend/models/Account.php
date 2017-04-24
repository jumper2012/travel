<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property integer $account_id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $created_at
 * @property integer $status
 * @property string $updated_at
 *
 * @property DetailAccount[] $detailAccounts
 * @property Order[] $orders
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'created_at', 'status', 'updated_at']],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['username', 'auth_key', 'password_hash'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'created_at' => 'Created At',
            'status' => 'Status',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailAccounts()
    {
        return $this->hasMany(DetailAccount::className(), ['account_id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['account_id' => 'account_id']);
    }
}
