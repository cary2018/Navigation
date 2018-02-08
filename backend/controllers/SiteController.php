<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),  //过滤器
                'rules' => [
                    [
                        'actions' => ['login', 'error'],    //•允许所有访客（还未经认证的用户）执行'login', 'error'操作
                        'allow' => true,                    //指定该规则是 "允许" 还是 "拒绝" 。（译者注：true是允许，false是拒绝）
                    ],
                    [
                        'actions' => ['logout', 'index'],//•允许所有访客（还未经认证的用户）执行'logout', 'index'操作
                        'allow' => true,                //指定该规则是 "允许" 还是 "拒绝" 。（译者注：true是允许，false是拒绝）
                        'roles' => ['@'],               //@是另一个特殊标识， 代表”已认证用户”,? 是一个特殊的标识，代表”访客用户”
                    ],
                ],
            ],
            'verbs' => [                               //指定该规则用于匹配哪种请求方法（例如GET，POST）。 这里的匹配大小写不敏感。
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        return $this->render('index');
    }

    public function actionLogin()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionTest()
    {
        if (!\Yii::$app->user->isGuest) {
            //return $this->goHome();
            echo 'ddddd';
        }else{
            echo 'fffffff';
        }

    }
}
