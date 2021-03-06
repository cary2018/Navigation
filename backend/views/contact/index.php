<?php
/**
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 */
/**
 * Created by PhpStorm.
 * User: asusa
 * Date: 2017/2/6/0006
 * Time: 16:18
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php Html::cssFile('@web/css/style.css')?>

<table class="table">
    <tr>
        <th><label style="cursor: pointer;"><input type="checkbox" style="display:none;" name="b">全选</label></th>
        <th>ID</th>
        <th>站点名称</th>
        <th>子站名称</th>
        <th>所属分类</th>
        <th>排序</th>
        <th>是否有效</th>
        <th>操作</th>
    </tr>
    <?php $i=1; foreach ($countries as $navigation): ?>
        <tr style="text-align: center;">
            <td style="width:55px;"><input type="checkbox" value="<?=$navigation->nav_id;?>" style="cursor:pointer;" name="navid[]"></td>
            <td ><?php echo $i++ .'-->'. $navigation->nav_id ?></td>
            <td><a href="<?=$navigation->nav_url?>" target="_blank"><?= $navigation->nav_name ?></a></td>
            <td ><a href="<?=$navigation->sun_url?>" target="_blank"><?= $navigation->sun_name ?></a> </td>
            <td><?= $navigation->navisort[0]['name'] ?></td>
            <td id="<?=$navigation->nav_id;?>" class="ordy" style="cursor: pointer;"><?= $navigation->ordery ?></td>
            <td class="show" id="<?=$navigation->nav_id;?>" style="cursor:pointer;"><?php if($navigation->is_show){echo '有效';}else{echo '无效';} ?></td>
            <td>
                <a href="/navigation/edit?id=<?= $navigation->nav_id ?>" class="inner_btn">编辑</a>
                <a href="/navigation/del?id=<?= $navigation->nav_id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?= LinkPager::widget([
    'pagination' => $pagination,
    'firstPageLabel'=>"首页",
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
    'lastPageLabel'=>'末页',])
?>

