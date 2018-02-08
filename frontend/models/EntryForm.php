<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_img
 * @property string $goods_url
 * @property string $shop_name
 * @property string $goods_prices
 * @property string $goods_sales
 * @property string $income_ratio
 * @property string $shop_wan
 * @property string $short_links
 * @property string $taobao_links
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_show
 * @property integer $view_num
 * @property integer $sort_order
 * @property integer $addtime
 * @property integer $uptime
 */
class EntryForm extends ActiveRecord
{
/*    public $name;
    public $email;
    public $email2;*/

    public static function tableName()
    {
        return '{{%goods}}';    //字义表名
    }

    public function rules()
    {
        return [
            [['goods_name', 'cat_id','shop_name'], 'required'],
            //[['cat_id',],'integer'],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $this->goods_name = Yii::$app->security->generateRandomString();    //
        $this->shop_name = Yii::$app->security->generatePasswordHash($this->shop_name);    //setPassword 给密码加密
        $this->addtime = time();

        return $this->save();
    }
}