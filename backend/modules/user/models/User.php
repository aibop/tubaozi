<?php

namespace backend\modules\user\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $mobile
 * @property string $password
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $access_token
 * @property integer $company_id
 * @property integer $allowance
 * @property integer $allowance_updated_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $logged_at
 * @property integer $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['allowance', 'allowance_updated_at', 'created_at', 'updated_at', 'logged_at', 'status'], 'integer'],
            [['username', 'password', 'access_token'], 'string', 'max' => 60],
            [['mobile'], 'string', 'max' => 11],
            [['password_hash', 'password_reset_token', 'auth_key'], 'string', 'max' => 255],
            [['access_token'], 'unique'],
            [['mobile'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'username' => Yii::t('backend', '会员名字'),
            'mobile' => Yii::t('backend', '电话'),
            'password' => Yii::t('backend', '密码'),
            'password_hash' => Yii::t('backend', '密码哈希'),
            'auth_key' => Yii::t('backend', 'API Key'),
            'access_token' => Yii::t('backend', 'API Token'),
            'allowance' => Yii::t('backend', 'API访问限额'),
            'allowance_updated_at' => Yii::t('backend', 'API访问限额更新时间'),
            'created_at' => Yii::t('backend', '添加时间'),
            'updated_at' => Yii::t('backend', '更新时间'),
            'logged_at' => Yii::t('backend', '登录时间'),
            'status' => Yii::t('backend', '状态'),
        ];
    }
}
