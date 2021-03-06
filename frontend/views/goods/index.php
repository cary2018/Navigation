<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GoodstSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '购物';

?>
<!--//这里***代表你的目录名或者文件名-->
<?=Html::jsFile('@web/js/jquery.lazyload.js')?>
<div class="goods-index">
    <?= $web_header ?>

    <div class="index_menu">
        <ul class="all_menu">
            <?php foreach($category as $item) : ?>
            <li><a href="/category?id=<?=$item->cat_id?>"><?= $item->cat_name; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <div class="goods_banner">
            <img src="../images/11.png" />
        </div>
        <div class="goods_right">
            <ul class="tui_goods">
                <li><a href="" target="_blank"><img src="../images/1.jpg"></a></li>
                <li><a href="" target="_blank"><img src="../images/2.jpg"></a></li>
                <li><a href="" target="_blank"><img src="../images/3.jpg"></a></li>
                <li><a href="" target="_blank"><img src="../images/4.jpg"></a></li>
            </ul>
            <div>
                <a href="jiukj"><img src="../images/5.jpg"></a>
            </div>
        </div>
    </div>
    <div class="goods_title f_l"><span>1F</span>9块9包邮</div>
    <div class="mai-wai">
        <?php foreach ($jiukj as $goods): ?>
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
                    <div class="goods-021 f_r">
                        <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                            <span><?= $goods->goods_name ?></span>
                        </a>
                    </div>
                    <div class="goods-021 f_r">
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
    <div class="goods_title f_l"><span>2F</span>20元封顶</div>
    <div class="mai-wai">
        <?php foreach ($ershi as $goods): ?>
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
                    <div class="goods-021 f_r">
                        <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                            <span><?= $goods->goods_name ?></span>
                        </a>
                    </div>
                    <div class="goods-021 f_r">
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
    <div class="goods_title f_l"><span>3F</span>时尚女装</div>
    <div class="mai-wai">
        <?php foreach ($nvzhuang as $goods): ?>
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
                    <div class="goods-021 f_r">
                        <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                            <span><?= $goods->goods_name ?></span>
                        </a>
                    </div>
                    <div class="goods-021 f_r">
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
    <div class="goods_title f_l"><span>4F</span>精品男装</div>
    <div class="mai-wai">
        <?php foreach ($nanzhuang as $goods): ?>
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
                    <div class="goods-021 f_r">
                        <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                            <span><?= $goods->goods_name ?></span>
                        </a>
                    </div>
                    <div class="goods-021 f_r">
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
</div>
<script type="text/javascript">
    // 延迟加载图片
    $(".goods-01 a img").lazyload({
        placeholder : "/images/grey.gif",
        effect      : "fadeIn",
        threshold : 100
    });
</script>