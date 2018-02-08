<?php
/**
 *
 * 用户数据模
 * author Cary($S$-memory)
 * contact QQ : 373889161
 *
 */
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // user_name and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            //表示登录密码使用 validatePassword 方法验证
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     * 验证登录密码的方法
     */
    public function validatePassword($attribute, $params)
    {

        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码有误！.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            Yii::$app->user->login($this->getUser(),5);
            return true;
        } else {
            return false;
        }
    }



    /**
     * Finds user by [[username]]
     *
     * @return Admin|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = Admin::findByUsername($this->username);
        }

        return $this->_user;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()   //返回显示数据
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'auth_key' => 'Goods ID',
            'password' => '密码',
            'email' => 'Goods Img',
            'add_time' => 'Goods Url',
            'up_time' => 'Shop Name',
            'login_time' => 'Goods Prices',
            'login_ip' => 'Goods Sales',
        ];
    }

    public function search($params)
    {
        $query = Admin::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        return $dataProvider;
    }
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $this->auth_key = Yii::$app->security->generateRandomString();    // 自动生成一串加密字符串
        $this->password = Yii::$app->security->generatePasswordHash($this->password);    //setPassword 给密码加密
        $this->add_time = time();
        $this->up_time = time();
        $this->login_time = time();

        return $this->save();
    }
}
