<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'cat_id',
            'goods_id',
            'goods_name',
            'goods_img',
            'goods_url:url',
            'shop_name',
            'goods_prices',
            'goods_sales',
            'income_ratio',
            'shop_wan',
            'short_links',
            'taobao_links',
            'is_best',
            'is_new',
            'is_hot',
            'is_show',
            'view_num',
            'sort_order',
            'addtime:datetime',
            'uptime:datetime',
        ],
    ]) ?>

</div>
