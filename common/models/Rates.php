<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "enprrates".
 *
 * @property integer $id
 * @property double $usd
 * @property double $btc
 * @property double $eth
 * @property double $ltc
 * @property double $dash
 * @property integer $created_at
 * @property integer $updated_at
 */
class Rates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enprrates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usd', 'btc', 'eth', 'ltc', 'dash'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usd' => 'Usd',
            'btc' => 'Btc',
            'eth' => 'Eth',
            'ltc' => 'Ltc',
            'dash' => 'Dash',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
