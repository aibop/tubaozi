<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $author
 * @property string $title
 * @property string $intro
 * @property string $content
 * @property string $picture
 * @property integer $viewed
 * @property integer $create_at
 * @property integer $update_at
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'viewed', 'create_at', 'update_at'], 'integer'],
            [['title', 'content', 'create_at', 'update_at'], 'required'],
            [['content'], 'string'],
            [['author', 'title'], 'string', 'max' => 128],
            [['intro', 'picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'author' => '作者',
            'title' => '标题',
            'intro' => '简介',
            'content' => '内容',
            'picture' => '图片路径',
            'viewed' => '浏览数',
            'create_at' => '新增时间',
            'update_at' => '更新时间',
        ];
    }
}
