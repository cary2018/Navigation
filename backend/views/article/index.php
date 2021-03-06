<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title='文章列表';

?>
<h1><?= $this->title ?></h1>
<p>
    <?= Html::a('添加文章', ['create'], ['class' => 'link_btn']) ?>
</p>
<div class="mai-wai">

    <table class="table">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>所属文章类目</th>
            <th>发布时间</th>
            <th>是否发布</th>
            <th>操作</th>
        </tr>
        <?php foreach ($countries as $article): ?>
        <tr>
            <td style="width:65px;"><?= $article->id ?></td>
            <td><?= $article->title ?></td>
            <td><?= $article->sort[0]->sort_name ?></td>
            <td><?= date('Y-m-d H:i:s',$article->uptime) ?></td>
            <td><?php if($article->is_show){echo '有效';}else{echo '无效';} ?></td>
            <td>
                <a href="/article/edit?id=<?= $article->id ?>"><span class="inner_btn">编辑</span></a>
                <a href="/article/delete?id=<?= $article->id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<div style="text-align: center;margin-top: 40px;margin-left:0;margin-right:0;">
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel'=>"首页",
        'prevPageLabel'=>'上一页',
        'nextPageLabel'=>'下一页',
        'lastPageLabel'=>'末页',])
    ?>
</div>
