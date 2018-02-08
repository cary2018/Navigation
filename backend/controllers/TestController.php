<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

namespace backend\controllers;

use Yii;

use app\models\Goods;
use yii\data\Pagination;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\UploadForm;

//调用phpexcel类库
require dirname(dirname(__FILE__)).'/excel/PHPExcel.php';
require_once dirname(dirname(__FILE__)).'/excel/PHPExcel/IOFactory.php';
require_once dirname(dirname(__FILE__)).'/excel/PHPExcel/Reader/Excel5.php';

class TestController extends Controller
{
    //public $layout=false; //重写这个属性就可以不使用默布局
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
            ],
        ];
    }

  public function actionIndex()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $query = Goods::find();
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
    public function actionLogin()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        return $this->render('test');
    }

    public function actionExcel()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new Goods();
        if ($model->load(Yii::$app->request->post())) {
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
                $excel->cat_id = $model->cat_id; //获取所有分类ID
                $excel->savexls();  //数据未能正常插入(而且只插入了一条空信息)(解决方案在循环内部实例MODEL解决
            }
            //echo '数据成功插入!';
            return true;
        }
        return $this->render('upexcel', ['model' => $model]);
    }

    public function actionUpload()
    {
        if(!\Funhelp::resession(SESSION_NAME))
        {
            return $this->redirect('/index/login');
        }
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            $model = new Archive();
            if($_POST['Archive']){
                $model->attributes = $_POST['Archive'];
                //文件上传
                $file=CUploadedFile::getInstance($model,'picname'); //获取表单名为filename的上传信息
                $filename=$file->getName();//获取文件名
                $filesize=$file->getSize();//获取文件大小
                $filetype=$file->getType();//获取文件类型
                $model->picname=$filename;//数据库中要存放文件名
                $uploadfile='./assets/upload/'.$filename;
                $file->saveAs($uploadfile,true);//上传操作

                if($model->save()){
                    Yii::app()->user->setFlash('success','添加文档成功');
                    $this->redirect(array('index'));
                }
            }
            if ($model->upload()) {
                echo "<script>alert('上传成功!')</script>";
                return;
            }else{
                echo "<script>alert('上传失败')</script>";
            }
        }

        return $this->render('upload', ['model' => $model]);
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
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
