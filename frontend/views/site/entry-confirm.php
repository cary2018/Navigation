<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->goods_name) ?></li>
    <li><label>Cat_id</label>: <?= Html::encode($model->cat_id) ?></li>
    <li><label>Shop_name</label>: <?= Html::encode($model->shop_name) ?></li>
</ul>