<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_account".
 *
 * @property integer $detail_account_id
 * @property integer $account_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $telepon
 * @property string $date_of_birth
 * @property integer $country_id
 *
 * @property Account $account
 * @property Country $country
 */
class DetailAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
     //       [['account_id', 'first_name', 'last_name', 'email', 'telepon', 'date_of_birth', 'country_id'], 'required'],
            [['account_id', 'country_id'], 'integer'],
            [['date_of_birth'], 'safe'],
            [['first_name', 'last_name', 'email', 'telepon'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detail_account_id' => 'Detail Account ID',
            'account_id' => 'Account ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'date_of_birth' => 'Date Of Birth',
            'country_id' => 'Country ID',
        ];
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
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'country_id']);
    }
}
