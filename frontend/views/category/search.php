<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '搜索'.$_GET['q'].'的商品结果页';
?>
<?= $web_header ?>
<div class="mai-wai">
    <?php foreach ($countries as $goods): ?>
        <div class="goods-wai">
            <?php
            $now = strtotime(date('Y-m-d',time()));
            $over = strtotime($goods->coupon_end);
            if($now <= $over && trim($goods->coupon_value)!='无')
            {
                ?>
                <div class="coupon">
                    <?=$goods->coupon_value;?>
                </div>
                <?php
            }
            ?>
            <div class="goods-01">
                <a href="<?= $goods->taobao_links ?>" target="_blank">
                    <img class="lazyload" src="<?= $goods->goods_img ?>" width="220" height="220">
                </a>
            </div>
            <div class="goods-02">
                <div class="goods-021 f_l">
                    <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                        <span><?= $goods->goods_name ?></span>
                    </a>
                </div>
                <div class="goods-021 f_l">
                    <span style="float: left;">￥<span style="font-size: 18px;"><?= $goods->goods_prices ?></span></span>
                    <span style="float:right;">销量:<?= $goods->goods_sales ?></span>
                </div>
            </div>
            <?php
            $now = strtotime(date('Y-m-d',time()));
            $over = strtotime($goods->coupon_end);
            if($now <= $over && trim($goods->coupon_value)!='无')
            {
                ?>
                <div class="button f_r">
                    <a class="button-a" href="<?= $goods->taobao_links ?>" target="_blank">2.去抢购</a>
                </div>
                <div class="button f_r">
                    <a class="button-a" href="<?= $goods->coupon_link ?>" target="_blank">1.去领券</a>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="button f_r">
                    <a class="button-a" href="<?= $goods->taobao_links ?>" target="_blank">去抢购</a>
                </div>
                <?php
            }
            ?>
        </div>
    <?php endforeach; ?>

</div>

<div class="goods_page">
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel'=>"首页",
        'prevPageLabel'=>'上一页',
        'nextPageLabel'=>'下一页',
        'lastPageLabel'=>'末页',])
    ?>
</div>
<script type="text/javascript">
    // 延迟加载图片
    $(".goods-01 a img").lazyload({
        placeholder : "/images/grey.gif",
        effect      : "fadeIn",
        threshold : 100
    });
</script>