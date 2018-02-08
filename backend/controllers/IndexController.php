<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *  后台首页和登录页
 *
 */
namespace backend\controllers;
use Yii;
use app\models\Admin;
use yii\web\Controller;


class IndexController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }

        $model = new Admin();
        $connection  = Yii::$app->db;
        $sql     = "SELECT VERSION() as mysql_version";
        $command = $connection->createCommand($sql);
        $version     = $command->queryScalar($sql);
        return $this->render('index',[
            'model' => $model,
            'version' => $version,
        ]);
    }
    public function actionLogin()
    {
        if(\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('index');
        }
        $model = new Admin();

        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            // 生成登录session
            \Funhelp::yiisession(Yii::$app->user->identity->id,SESSION_NAME);
            // 登录成功跳到后台首页
            return $this->redirect('index');
        }
        else
        {
            return $this->renderPartial('login',[
                'model' => $model,
            ]);
        }
    }
    public function actionLogut(){
        // 销毁session中所有已注册的数据
        //$session->destroy();
        //销毁某一个session
        unset(Yii::$app->session[SESSION_NAME]);
        return $this->redirect('login');
    }
}

?>