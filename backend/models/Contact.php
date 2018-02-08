<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%contact}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $content
 * @property string $addtime
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contact}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'content', 'addtime'], 'required'],
            [['addtime'], 'integer'],
            [['username'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 36],
            [['content'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'content' => 'Content',
            'addtime' => 'Addtime',
        ];
    }
}
