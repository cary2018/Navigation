<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title='分类管理';
?>

<?=Html::jsFile(['@web/js/public.js'])?>
<h1>商品分类</h1>
    <p>
        <?= Html::a('添加分类', ['create'], ['class' => 'link_btn']) ?>
    </p>

<table class="table">
    <tr>
        <th>商品分类名称</th>
        <th>显示数量</th>
        <th>排序</th>
        <th>首页是否显示</th>
        <th>操作</th>
    </tr>
    <tr>
        <?php foreach ($nav as $item):?>
    <tr>
        <td><div id="<?=$item['coun'];?>" onclick="ali()" style="margin-left:<?=$item['coun'];?>em"><?php echo $item['name'];?></div></td>
        <td>
            <a href="/category/edit?id=<?= $item['id'] ?>"  class="inner_btn">编辑</a>
            <a href="/category/delete?id=<?= $item['id'] ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
