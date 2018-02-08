<?php
/**
 *
 * 商品分类管理
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

namespace backend\controllers;

use Yii;
use app\models\Category;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $funhelp = new \Funhelp();
        $countries=Category::find()->all();
        $menu = $funhelp->gettree($countries,'parent_id','cat_id','cat_name',1);
        $nav = $funhelp->formenu($menu);
        return $this->render('index', [
            'nav'       => $nav,
        ]);
    }

    /**
     * @param $id
     * @return string
     * @throws NotFoundHttpException
     * 预览
     */
    public function actionView($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
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
        $model = new Category();
        $funhelp = new \Funhelp();
        $model->scenario = 'create';    //设置 create 场景验证
        $countries=Category::find()->all();
        $menu = $funhelp->gettree($countries);
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类

        if ($model->load(Yii::$app->request->post()) &&  $model->signup()) {
            Yii::$app->session->setFlash('success','添加成功!');
            return $this->redirect('index');  //跳转到提示页面
        } else {
            return $this->render('create', [
                'model' => $model,
                'listData' => $listData,
            ]);
        }
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * 编辑分类
     */
    public function actionEdit($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findModel($id);
        if(!$model)
        {
            return $this->redirect('index');
        }
        $model->scenario = 'create';   //调用验证场景
        if($model->load(Yii::$app->request->post())){
            $resid = new \Funhelp();
            $selid = $resid->getarr($id,1);
            $newarr = explode(',',$resid->returnid($selid));
            if(in_array($model->parent_id,$newarr))
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
        $countries=Category::find()->all();
        $help = new \Funhelp();
        $menu = $help->gettree($countries);
        $nav = $help->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类

        return $this->render('edit',['model'=>$model,'listData'=>$listData]);
    }
    /**
     * @return string
     * 操作成功提示页面
     */
    public function actionSuccess()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        return $this->render('success');
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * 更新内容
     */
    public function actionUpdate($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * 删除内容
     */
    public function actionDelete($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $goods = Category::find()
            ->leftJoin('yii_goods', 'yii_goods.cat_id = yii_category.cat_id')
            ->where(['yii_goods.cat_id'=>$id])
            ->all();
        $help = new \Funhelp();
        $carr = $help->getarr($id);
        $model = new Category();
        $model->stuts($goods,$carr,$id);
        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return mixed
     * @throws NotFoundHttpException
     * 根据ID返回查询内容
     */
    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }
        else
        {
            Yii::$app->session->setFlash('success','参数错误!');
        }
    }
}
