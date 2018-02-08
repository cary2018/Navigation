<?php
/**
 * 留言板模板
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 *
 */
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Contact;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $model = new Contact();
        return $this->render('index',['model'=>$model]);
    }
    public function actionAddmes()
    {
        $model = new Contact();
        $model->load(Yii::$app->request->post());
        $model->addmes();
        return $this->redirect('index');
    }
}