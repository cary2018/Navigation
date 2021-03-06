<?php
/**
 * 商品分类页
 * author Cary
 * contact QQ : 373889161($S$-memory)
 */
namespace frontend\controllers;
use frontend\models\Category;
use Yii;
use yii\data\Pagination;
use frontend\models\Goods;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $query = Goods::find();
        $id = Yii::$app->request->get('id');
        $category = Category::find()
            ->leftJoin('yii_goods','yii_goods.cat_id=yii_category.cat_id')
            ->where('yii_goods.cat_id = yii_category.cat_id AND yii_category.index_show=1 AND yii_category.is_show=1')
            ->all();
        $model = Category::findOne($id);
        if($model)
        {
            $query = $query->where('cat_id in ('.$id.')');
        }
        else
        {
            return $this->redirect('/shop');
        }
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 50,//设置显示数量
            'totalCount' => $query->count(),//总记录
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $select = 1;
        $header = $this->renderpartial('/layouts/goods_header',['select' => $select]);
        return $this->render('index',[
            'countries' => $countries,
            'pagination'=>$pagination,
            'title_name'=>$model->cat_name,
            'category' => $category,
            'web_header' => $header
        ]);
    }

    /**
     * @return string
     * 9块9包邮模块
     */
    public function actionJiukj()
    {
        $query = Goods::find()->where(['cat_id'=>27]);
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 50,//设置显示数量
            'totalCount' => $query->count(),//总记录
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $select = 4;
        $header = $this->renderpartial('/layouts/goods_header',['select' => $select]);
        return $this->render('jiukj',[
            'countries' => $countries,
            'pagination'=>$pagination,
            'web_header' => $header
        ]);
    }

    /**
     * @return string
     * 20元封顶模块
     */
    public function actionErshi()
    {
        $query = Goods::find()->where(['cat_id'=>28]);
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 50,//设置显示数量
            'totalCount' => $query->count(),//总记录
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $select = 5;
        $header = $this->renderpartial('/layouts/goods_header',['select' => $select]);
        return $this->render('ershi',[
            'countries' => $countries,
            'pagination'=>$pagination,
            'web_header' => $header
        ]);
    }

    /**
     * @return string
     * 搜索商品页
     */
    public function actionSearch()
    {
        $q = Yii::$app->request->get('q');
        $query = Goods::find()->where(['like','goods_name',$q]);
        //设置分页
        $pagination = new Pagination([
            'defaultPageSize' => 50,//设置显示数量
            'totalCount' => $query->count(),//总记录
        ]);
        $countries = $query->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $select = 1;
        $header = $this->renderpartial('/layouts/goods_header',['select' => $select]);
        return $this->render('search',[
            'countries' => $countries,
            'pagination'=>$pagination,
            'web_header' => $header
        ]);
    }
}