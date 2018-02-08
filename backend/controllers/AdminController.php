<?php
/**
 *
 * 用户管理
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
namespace backend\controllers;
use Yii;
use app\models\Admin;
use yii\web\Controller;
use yii\data\Pagination;

class AdminController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $query = Admin::find();
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
            'pagination' => $pagination,
            'countries' => $countries,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     * 创建管理员信息
     */
    public function actionCreate()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Admin();
        $pass = \yii::$app->request->post('password2');
        if ($model->load(Yii::$app->request->post()))
        {
            if($pass === $model->password)
            {
                Yii::$app->session->setFlash('success','添加成功！');
                $model->signup();
                return $this->redirect(['admin/']);
            }
            else
            {
                Yii::$app->session->setFlash('success','密码不一致！');
                return $this->render('create', [
                    'model' => $model,
                ]);

            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * 更新管理员信息
     */
    public function actionUpdate($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findModel($id);
        $update = new Admin();
        $pass2 = \yii::$app->request->post('password2');
        if ($update->load(Yii::$app->request->post()))
        {
            if($pass2 === $update->password)
            {
                $update->upsave($id);
                Yii::$app->session->setFlash('success','更新成功');
                return $this->redirect(['index']);
            }
            else
            {
                Yii::$app->session->setFlash('success','密码不一致！');
                return $this->render('update', [
                    'model' => $model,
                ]);
            }

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
     * 删除管理员信息
     */
    public function actionDelete($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     * @return null|\yii\web\Response|static
     * @throws NotFoundHttpException
     * 返回指定管理信息
     */
    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Admin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
