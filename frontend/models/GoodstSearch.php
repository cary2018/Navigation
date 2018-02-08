<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Goods;

/**
 * GoodstSearch represents the model behind the search form about `frontend\models\Goods`.
 */
class GoodstSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'goods_id', 'is_best', 'is_new', 'is_hot', 'is_show', 'view_num', 'sort_order', 'addtime', 'uptime'], 'integer'],
            [['goods_name', 'goods_img', 'goods_url', 'shop_name', 'goods_sales', 'income_ratio', 'shop_wan', 'short_links', 'taobao_links'], 'safe'],
            [['goods_prices'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Goods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,   //每页显示几条信息默认20条
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'cat_id' => $this->cat_id,
            'goods_id' => $this->goods_id,
            'goods_prices' => $this->goods_prices,
            'is_best' => $this->is_best,
            'is_new' => $this->is_new,
            'is_hot' => $this->is_hot,
            'is_show' => $this->is_show,
            'view_num' => $this->view_num,
            'sort_order' => $this->sort_order,
            'addtime' => $this->addtime,
            'uptime' => $this->uptime,
        ]);

        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_img', $this->goods_img])
            ->andFilterWhere(['like', 'goods_url', $this->goods_url])
            ->andFilterWhere(['like', 'shop_name', $this->shop_name])
            ->andFilterWhere(['like', 'goods_sales', $this->goods_sales])
            ->andFilterWhere(['like', 'income_ratio', $this->income_ratio])
            ->andFilterWhere(['like', 'shop_wan', $this->shop_wan])
            ->andFilterWhere(['like', 'short_links', $this->short_links])
            ->andFilterWhere(['like', 'taobao_links', $this->taobao_links]);

        return $dataProvider;
    }
}
