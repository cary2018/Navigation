<?php
/**
 * 商品首页
 * author Cary
 * contact QQ : 373889161($S$-memory)
 */
namespace frontend\controllers;

use Yii;
use frontend\models\Goods;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use frontend\models\Category;

/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends Controller
{
    /**
     * Lists all Goods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Goods::find();
        //分类
        $category = Category::find()
            ->leftJoin('yii_goods','yii_goods.cat_id=yii_category.cat_id')
            ->where('yii_goods.cat_id = yii_category.cat_id AND yii_category.index_show=1 AND yii_category.is_show=1')
            ->all();
        $jiukj = $this->goodsshow(27,15);
        $ershi = $this->goodsshow(3,15);
        $nvzhuang = $this->goodsshow(1,15);
        $nanzhuang = $this->goodsshow(2,15);
        $select = 1;
        $header = $this->renderpartial('/layouts/goods_header',['select' => $select]);
        return $this->render('index', [
            'category' => $category,
            'jiukj' => $jiukj,
            'ershi' => $ershi,
            'nvzhuang' => $nvzhuang,
            'nanzhuang' => $nanzhuang,
            'web_header' => $header,
        ]);
    }

    /**
     * Displays a single Goods model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        //以下为抓取远程文件内容测试信息
        //$url = file_get_contents('https://item.taobao.com/item.htm?id=527075271224');
        $url = file_get_contents('https://item.taobao.com/item.htm?id=539766353155');
        //$url = file_get_contents('https://detail.tmall.com/item.htm?id=540356235173&spm=a219t.7900221/10.1998910419.d30ccd691.A9ghv1');
        $tall = file_get_contents('https://detail.tmall.com/item.htm?id=528292997200&spm=a219t.7900221/10.1998910419.d30ccd691.A9ghv1&sku_properties=20509:28314');
        $ze  = "/(<em class=\"tb-rmb-num\">([\d.]*)<\/em>|<em class=\"tb-rmb-num\">([\d.\s-\w.]*)<\/em>|\"defaultItemPrice\":\"([\d.]*)\",\"double11StartTime\")/i";
        $tze  = "/(\"defaultItemPrice\":\"([\d.]*)\",\"double11StartTime\")/";
        preg_match($ze,$url,$arr);
        preg_match($tze,$tall,$arry);
        //print_r($arr);
        if($arr && array_key_exists(2,$arr) && $arr[2]!='')
        {
            $price = $arr[2];
        }elseif($arr && array_key_exists(3,$arr) && $arr[3]!='')
        {
            $price = $arr[3];
        }elseif($arr && array_key_exists(4,$arr) && $arr[4]!='')
        {
            $price = $arr[4];
        }else{
            $price = '';
        }
        echo $price;
        echo '<br>';
        print_r($arry[2]);
        /*return $this->render('view', [
            'model' => $this->findModel($id),
        ]);*/
    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Goods();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Goods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
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
     * Deletes an existing Goods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Goods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Goods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function goodsshow($id,$num)
    {
        $model = Goods::find();
        $resco = $model->where(['cat_id'=>$id])->orderBy('id desc')
            ->limit($num)
            ->all();
        return $resco;

    }
}
