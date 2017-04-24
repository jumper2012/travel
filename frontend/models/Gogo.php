<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "gogo".
 *
 * @property integer $id_gogo
 * @property string $detail_gogo
 */
class Gogo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gogo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_gogo'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gogo' => 'Id Gogo',
            'detail_gogo' => 'Detail Gogo',
        ];
    }
}
