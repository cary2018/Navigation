<?php
/**
 * 文章分类管理
 * article list
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use app\models\Sort;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

class SortController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $funhelp = new \Funhelp();
        $countries=Sort::find()->all();
        $menu = $funhelp->gettree($countries,'pid','id','sort_name',1);
        $nav = $funhelp->formenu($menu);
        return $this->render('index', [
            'nav' => $nav,
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
        $model = new Sort();
        $funhelp = new \Funhelp();
        $model->is_nav=0;
        $model->is_show=0;
        //$model->scenario = 'create';    //设置 create 场景验证
        $countries=Sort::find()->all();
        $menu = $funhelp->gettree($countries,'pid','id','sort_name');
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类

        if ($model->load(Yii::$app->request->post()) &&  $model->addmeg()) {
            Yii::$app->session->setFlash('success','添加成功！');
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
        if(!$model)
        {
            return $this->redirect('index');
        }
        $countries=Sort::find()->all();
        $menu = $funhelp->gettree($countries,'pid','id','sort_name');
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类
        if($model->load(Yii::$app->request->post())){
            $resid = new \Funhelp();
            $selid = $resid->getsort($id,1);
            $newarr = explode(',',$resid->returnid($selid));
            if(in_array($model->pid,$newarr))
            {
                Yii::$app->session->setFlash('success','选择上级分类错误!');
            }
            else
            {
                $model->save();
                Yii::$app->session->setFlash('success','更新成功!');
                return $this->redirect('index');
            }
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
        $funhelp = new \Funhelp();
        $countries=Sort::find()->all();
        $menu = $funhelp->get_tree($countries,'pid','id','sort_name',0,$id);
        $article = Sort::find()->leftJoin('yii_article','yii_article.pid = yii_sort.id')
                    ->select('yii_sort.*,yii_article.*')
                    ->where(['yii_article.pid'=>$id])
                    ->all();
        if($article)
        {
            Yii::$app->session->setFlash('success','分类下有数据不可以删除!');
        }
        else
        {
            if($menu){
                //存在子节点　不可删除
                Yii::$app->session->setFlash('success','不可以删除!');
            }else{
                //不存在子节点　可删除
                //$this->findModel($id)->delete();
                Yii::$app->session->setFlash('success','可以删除!');
            }
        }

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Sort::findOne($id)) !== null) {
            return $model;
        } else {
            Yii::$app->session->setFlash('success','参数错误!');
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