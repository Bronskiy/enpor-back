<?php

namespace common\models;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "enprreferral_registrations".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $created_at
 *
 * @property User $user
 */
class ReferralRegistrations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enprreferral_registrations';
    }

    public function behaviors()
    {
        return [
            'timestamp'  => [
                'class' => TimestampBehavior::className(),
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'ref_parent_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'ref_parent_id' => 'Referral ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getUserProfile() {
        return $this->hasOne(UserProfile::className(), ['user_id' => 'id']);
    }
}
