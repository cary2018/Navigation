<?php
/**
 *
 * 商品列表管理
 * author Cary($S$-memory)
 * contact QQ : 373889161
 *
 */

namespace backend\controllers;

use app\models\Goods;
use app\models\Category;
use app\models\Navigation;
use backend\models\Channel;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
//调用phpexcel类库
require dirname(dirname(__FILE__)).'/excel/PHPExcel.php';
require_once dirname(dirname(__FILE__)).'/excel/PHPExcel/IOFactory.php';
require_once dirname(dirname(__FILE__)).'/excel/PHPExcel/Reader/Excel5.php';
class GoodsController extends Controller
{
    public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $query = Goods::find();
        $funhelp = new \Funhelp();
        $countries=Category::find()->all();
        $menu = $funhelp->gettree($countries,'parent_id','cat_id','cat_name');
        $nav = $funhelp->formenu($menu);
        $pid = Yii::$app->request->get('pid');
        $chid = Yii::$app->request->get('chid');
        $so = Yii::$app->request->post('s');
        $resid = $funhelp->getarr($pid,1);
        $name = Category::findOne($pid);
        $name = isset($name->cat_name) ? $name->cat_name : '';
        $channel = Channel::find()->all();

        if($pid && $chid =='')
        {
            $query = $query->where('cat_id in('. $funhelp->returnid($resid) .')');
        }
        if($chid !='' && !$pid)
        {
            $query = $query->where(['channel_id'=>$chid]);
        }
        if($pid && $chid !='')
        {
            $query = $query->where('cat_id in('. $funhelp->returnid($resid) .')')->andWhere(['channel_id'=>$chid]);
        }

        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 18,//设置显示数量
            'totalCount' => $query->count(),//总记录
        ]);
        $countries = $query->orderBy('id desc') //排序
            ->offset($pagination->offset)   //分页偏移
            ->limit($pagination->limit)     //限制显示数据
            ->all();
        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination,
            'nav' => $nav,
            'name' => $name,
            'channel' => $channel,
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
        $model = new Goods();
        $funhelp = new \Funhelp();
        $model->is_show = 0;    //设置默认值(单选)
        $model->is_new = 1;    //设置默认值是否选中(复选)
        $model->scenario = 'create';    //设置 create 场景验证
        $countries=Category::find()->all();
        $menu = $funhelp->gettree($countries);
        $nav = $funhelp->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类
        $channel = Channel::find()->all();
        $listChannel = ArrayHelper::map($channel,'id','channel_name');
        if ($model->load(Yii::$app->request->post())) {
            $filename = UploadedFile::getInstance($model, 'filename');
            $path='uploads/goods/'.date("Ymd",time()).'/';
            if ($filename && $model->validate()) {
                if(!file_exists($path)){
                    mkdir($path,'777');
                }
                $filename->saveAs($path . time() . '.' . $filename->getExtension());
                $model->goods_img = '/'.$path.time().'.'.$filename->getExtension();
                $model->addcreate();
            }
            $model->addcreate();
            Yii::$app->session->setFlash('success','添加成功！');
            return $this->redirect('success');  //跳转到提示页面

        } else {
            return $this->render('create', [
                'model' => $model,
                'listData' => $listData,
                'listChannel' => $listChannel,
            ]);
        }
    }

    public function actionEdit($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = $this->findModel($id);
        $model->scenario = 'create';
        if($model->load(Yii::$app->request->post())){
            $filename = UploadedFile::getInstance($model, 'filename');
            $path='uploads/goods/'.date("Ymd",time()).'/';
            if ($filename && $model->validate()) {
                if(!file_exists($path)){
                    mkdir($path,'0777');
                }
                if(trim($model->goods_img))    //删除原文件节省空间
                {
                    @unlink(trim($model->goods_img,'/'));   // @ 防止删除报错
                }
                $filename->saveAs($path . time() . '.' . $filename->getExtension());
                $model->goods_img = '/'.$path.time().'.'.$filename->getExtension();
                $model->addcreate();
            }
            $model->save();
            Yii::$app->session->setFlash('success','修改成功！');
            return $this->redirect('index');
        }
        $countries=Category::find()->all();
        $help = new \Funhelp();
        $menu = $help->gettree($countries);
        $nav = $help->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name'); //输出选择上级分类
        $channel = Channel::find()->all();
        $listChannel = ArrayHelper::map($channel,'id','channel_name');
        return $this->render('edit',['model'=>$model,'listData'=>$listData,'listChannel'=>$listChannel]);
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
     * @return bool|string
     * @throws \PHPExcel_Reader_Exception
     * 批量导入商品
     */
    public function actionExcel()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Goods();
        $model->scenario='excel';   //设置场景验证
        $countries=Category::find()->all();
        $help = new \Funhelp();
        $menu = $help->gettree($countries);
        $nav = $help->formenu($menu);
        $listData=ArrayHelper::map($nav,'id','name');
        $channel = Channel::find()->all();
        $channelList = ArrayHelper::map($channel,'id','channel_name');

        if ($model->load(Yii::$app->request->post()) )
        {
            $model->filename = UploadedFile::getInstances($model, 'filename');
            $file=$model->filename;
            $upload_file = $file[0]->tempName;
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format
            $objPHPExcel = $objReader->load($upload_file);
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            $arr_result=array();
            for($j=2;$j<=$highestRow;$j++)
            {
                $excel = new Goods();
                unset($arr_result);
                for($k='A';$k<= $highestColumn;$k++)
                {
                    //读取单元格
                    $excel->arr_result[] = $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue();
                }
                $excel->cat_id = $model->cat_id; //获取所属分类ID
                $excel->channel_id = intval($model->channel_id); //获取所属商品渠道ID
                $excel->savexls();  //数据未能正常插入(而且只插入了一条空信息)(解决方案在循环内部实例MODEL解决
            }
            Yii::$app->session->setFlash('success','导入成功！');
            return $this->redirect('index');
        }
        return $this->render('upexcel', ['model' => $model,'listData'=>$listData,'channellist'=>$channelList]);
    }

    /**
     * @return string
     * 商品渠道列表页
     */
    public function actionChannel()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Channel();
        $listData = Channel::find()->all();
        return $this->render('channel',['list'=>$listData]);
    }

    /**
     * @return string
     * 添加渠道表单
     */
    public function actionNewchannel()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Channel();
        return $this->render('newchannel',['model'=>$model]);
    }

    /**
     * @return \yii\web\Response
     * 执行添加商品渠道操作
     */
    public function actionAddchannel()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Channel();
        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success','添加成功');
        }
        else
        {
            Yii::$app->session->setFlash('error','添加失败');
        }
        return $this->redirect('channel');
    }

    /**
     * @return string
     * 编辑商品渠道
     */
    public function actionEdchannel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Channel();
        $data = $model->edmodel($id);
        if(!$data)
        {
            Yii::$app->session->setFlash('success','参数错误!');
            return $this->redirect('channel');
        }
        if($data->load(Yii::$app->request->post()))
        {
            $data->save();
            Yii::$app->session->setFlash('success','更新成功!');
            return $this->redirect('channel');
        }
        return $this->render('edchannel',['model'=>$data]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws \Exception
     * @throws \backend\models\NotFoundHttpException
     * 删除商品渠道
     */
    public function actionDech($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $goods = Goods::find()
            ->leftJoin('yii_channel', 'yii_channel.id = yii_goods.channel_id')
            ->where(['yii_goods.channel_id'=>$id])
            ->all();
        $model = new Channel();
        $model->fmodel($id,$goods);
        return $this->redirect('channel');
    }

    /**
     * 批量删除商品
     */
    public function actionDenav(){
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $mode = new Goods();
        $delid = Yii::$app->request->post('navid');
        $mode->batchde($delid);
        $this->redirect('index');
    }

    /**
     * @param $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     * 删除商品
     */
    public function actionDelete($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $this->findModel($id)->delete();    //删除操作

        return $this->redirect(['index']);  //跳转
    }

    protected function findModel($id)
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        if (($model = Goods::findOne($id)) !== null)
        {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

