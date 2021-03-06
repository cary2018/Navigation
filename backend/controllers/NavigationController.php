<?php
/**
 *
 * 导航菜单与分类
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Navigation;
use app\models\Navisort;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;


class NavigationController extends Controller{
    /**
     * @return string
     * 导航列表
     */
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $sort = Navisort::find()->all();
        $name = Yii::$app->request->get('s');
        $pid = Yii::$app->request->get('pid');

        $query = Navigation::find()->joinWith('navisort');
        //$query = Navigation::find()->joinWith('navisort')->where(['nav_pid'=>3,'nav_id' => [4, 8, 15],])->andWhere(['like','nav_name','网']);
        if($name && $pid)
        {
            $query = $query->where(['nav_pid'=>$pid])->andWhere(['or',['like','nav_name',$name],['like','sun_name',$name]]);
        }
        else
        {
            if($name)
            {
                $query = $query->andWhere(['or',['like','nav_name',$name],['like','sun_name',$name]]);
            }
            if($pid)
            {
                $query = $query->where(['nav_pid'=>$pid]);
            }
        }

        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 18,//设置显示数量
            'totalCount' => $query->count(),//总记录
            'pageParam' => 'p', //URL参数设置为p
            //'route' => false,  //隐藏路由
            'validatePage' => false,
        ]);
        $countries = $query->orderBy('nav_id desc')
            ->select(['nav_id','nav_pid','nav_name','nav_url','sun_name','sun_url','ordery','is_show'])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
           'countries' => $countries,
           'pagination' => $pagination,
           'sort'       => $sort,
       ]);
    }

    /**
     * 批量删除修改数据
     */
    public function actionDenav(){
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $mode = new Navigation();
        $pid = Yii::$app->request->post('pid');
        $delid = Yii::$app->request->post('navid');
        $sub = Yii::$app->request->post('dqpg') ? Yii::$app->request->post('dqpg') : Yii::$app->request->post('submit');
        $mode->batchde($sub,$delid,$pid,$sub);

        $this->redirect('index');
    }
    /**
     * @return string
     * 添加导航
     */
    public function actionCreate()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navigation();
        $model->is_target = 1;  //设置默认新窗口打开
        $model->is_show = 1;    //设置默认有效
        $countries=Navisort::find()->all();
        $listData=ArrayHelper::map($countries,'id','name'); //输出选择上级分类
        if($model->load(Yii::$app->request->post()) && $model->addmages())
        {
            Yii::$app->session->setFlash('success','添加成功！'); //页面提示信息
            return $this->redirect('index');
        }
        return $this->render('create',[
            'model'=>$model,
            'listData'=>$listData,
        ]);
    }
    /**
     * @return string
     *
     * 导航分类
     */
    public function actionSort()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $query = Navisort::find();
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 50,//设置显示数量
            'totalCount' => $query->count(),//总记录
            'pageParam' => 'p', //URL参数设置为p
            //'route' => false,  //隐藏路由
            'validatePage' => false,
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('sort',[
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    /**
     * @return string
     * 添加导航分类
     */
    public function actionAddsort()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navisort();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success','添加成功');
            return $this->redirect('sort');
        }
        return $this->render('add_sort',[
            'model'=>$model,
        ]);
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * 修改导航信息
     *
     */
    public function actionEdit($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findModel($id);
        $save = new Navigation();
        $countries=Navisort::find()->all();
        $listData=ArrayHelper::map($countries,'id','name'); //输出选择上级分类
        if($save->load(Yii::$app->request->post()))
        {
            $save->updata($id);
            Yii::$app->session->setFlash('success','修改成功!');
            return $this->redirect('index');
        }
        return $this->render('edit',[
            'model'=>$model,
            'listData'=>$listData,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * 删除导航
     */
    public function actionDelete($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        //判断分类下是否存在数据
        $query = Navigation::find()->joinWith('navisort')->where(['nav_pid'=>$id])->all();
        if($query)
        {
            //页面提示信息
            Yii::$app->session->setFlash('success','分类下有数据不能直接删除!');
        }
        else
        {
            Yii::$app->session->setFlash('success','删除成功!');
            $this->findNavsort($id)->delete();
        }
        return $this->redirect(['sort']);
    }
    /**
     *  异步更新导航列表排序字段
     */
    public function actionUpord()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navigation();
        $uid = intval(Yii::$app->request->post('uid'));
        $oval = intval(Yii::$app->request->post('oval'));
        $model->uporder($uid,$oval);
    }

    /**
     *  异步更新导航列表是否有效字段
     */
    public function actionUpshow()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navigation();
        $id = Yii::$app->request->post('id');
        $val = Yii::$app->request->post('val');
        $model->upshow($id,$val);
    }
    /**
     *  异步更新导航分类显示导航列表数
     */
    public function actionUpnumber()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navisort();
        $uid = intval(Yii::$app->request->post('uid'));
        $oval = intval(Yii::$app->request->post('oval'));
        $model->upnumber($uid,$oval);
    }
    /**
     *  异步更新导航分类排序字段
     */
    public function actionUpsort()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navisort();
        $uid = intval(Yii::$app->request->post('uid'));
        $oval = intval(Yii::$app->request->post('oval'));
        $model->upsort($uid,$oval);
    }
    /**
     *  异步更新导航列表是否有效字段
     */
    public function actionUpstatus()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Navisort();
        $id = Yii::$app->request->post('id');
        $val = Yii::$app->request->post('val');
        $model->upstatus($id,$val);
    }
    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * 编辑导航分类
     */
    public function actionUpdata($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findNavsort($id);
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success','编辑成功！');
            return $this->redirect('sort');
        }
        return $this->render('add_sort',[
            'model'=>$model,
        ]);
    }

    public function actionDel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if($this->findModel($id)->delete())
        {
            Yii::$app->session->setFlash('success','删除成功！');
        }
        else
        {
            Yii::$app->session->setFlash('success','删除失败！');
        }
        return $this->redirect(['index']);
    }
    /**
     * @param $id
     * @return mixed
     * @throws NotFoundHttpException
     * 根据ID返回查询导航信息
     * 导航信息
     */
    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Navigation::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    /**
     * @param $id
     * @return null|\yii\web\Response|static
     * @throws NotFoundHttpException
     * 根据ID返回查询分类信息
     * 导航分类信息
     */
    protected function findNavsort($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Navisort::findOne($id)) !== null)
        {
            return $model;
        }
        else
        {
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