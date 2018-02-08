<?php
/**
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 */
/**
 * Created by PhpStorm.
 * User: asusa
 * Date: 2017/2/6/0006
 * Time: 16:07
 */
namespace backend\controllers;

use app\models\Contact;
use yii\data\Pagination;
use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login/');
        }
        $query = Contact::find();
        $pagetione = new Pagination([
            'defaul'
        ]);
        return $this->render('index');
    }
}