<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%channel}}".
 *
 * @property integer $id
 * @property string $channel_name
 * @property string $channel_keyword
 * @property string $channel_description
 */
class Channel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%channel}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['channel_name', 'channel_keyword', 'channel_description'], 'required'],
            [['channel_name'], 'string', 'max' => 30],
            [['channel_keyword'], 'string', 'max' => 100],
            [['channel_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'channel_name' => 'Channel Name',
            'channel_keyword' => 'Channel Keyword',
            'channel_description' => 'Channel Description',
        ];
    }
}
