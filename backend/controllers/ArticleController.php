<?php
/**
 *
 * 文章列表管理
 * article list
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Article;
use app\models\Sort;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $query = Article::find()->joinWith('sort');
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 10,//设置显示数量
            'totalCount' => $query->count(),//总记录
            'pageParam' => 'p', //URL参数设置为p
            //'route' => false,  //隐藏路由
            'validatePage' => false,
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     * 创建新内容
     */
    public function actionCreate()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Article();
        $funhelp = new \Funhelp();
        $model->is_show=1;
        //$model->scenario = 'create';    //设置 create 场景验证
        $countries=Sort::find()->all();
        $menu = $funhelp->gettree($countries,'pid','id','sort_name');
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类

        if ($model->load(Yii::$app->request->post()) &&  $model->addmeg()) {
            Yii::$app->session->setFlash('success','添加成功！'); //页面提示信息
            return $this->redirect('index');  //跳转到提示页面
        } else {
            return $this->render('create', [
                'model' => $model,
                'listData' => $listData,
            ]);
        }
    }
    public function actionEdit($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $funhelp = new \Funhelp();
        $model = $this->findModel($id);
        $countries=Sort::find()->all();
        $menu = $funhelp->gettree($countries,'pid','id','sort_name');
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类
        if($model->load(Yii::$app->request->post())){
            $model->uptime = time();
            $model->save();
            Yii::$app->session->setFlash('success','编辑成功!');
            return $this->redirect('index');
        }
        return $this->render('edit',[
            'model'=>$model,
            'listData'=>$listData,
        ]);
    }
    public function actionDelete($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSuccess()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        return $this->render('success');
    }
}
