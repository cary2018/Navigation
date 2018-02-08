<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title='测试页';
?>

<?=Html::cssFile('@web/css/style.css') ?>
    <h1>Countries</h1>
<div class="mai-wai">
    <?php foreach ($countries as $goods): ?>
        <div class="goods-wai">
            <div class="goods-01">
                <a href="<?= $goods->taobao_links ?>" target="_blank"><img src="<?= $goods->goods_img ?>" width="218" height="218"></a>
            </div>
            <div class="goods-02">
                <div class="goods-021">
                    <a class="goods-title" href="<?= $goods->taobao_links ?>" target="_blank">
                        <span><?= $goods->goods_name ?></span>
                    </a>
                </div>
                <div class="goods-021">
                    <span style="float: left;">￥<?= $goods->goods_prices ?></span>
                    <span style="float:right;">月销量:<?= $goods->goods_sales ?></span>
                </div>
            </div>
            <div class="button">
                <a class="button-a" href="<?= $goods->taobao_links ?>" target="_blank">去购买</a>
            </div>
        </div>
    <?php endforeach; ?>
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




        <div class="search-result-wrap search-result-wrap-block clearfix" p-id="677">
            <div class="block-search-box tag-wrap" p-id="678">
                <div class="pic-box" p-id="679">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=527051204176" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=527051204176&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="680" data-spm-anchor-id="a219t.7900221.1998910419.d30ccd691"><img src="http://img01.taobaocdn.com/bao/uploaded/i1/TB1sgaJLFXXXXcgXVXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="681" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="682">
                    <div class="content-line" p-id="683">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=527051204176" target="_blank" title="韩都衣舍2016韩版女装夏新款条纹拼接收腰雪纺长裙连衣裙OY5214焕" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=527051204176&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="684" data-spm-anchor-id="a219t.7900221.1998910419.115"><span p-id="686">韩都衣舍2016韩版</span><span class="H" p-id="687">女装</span><span p-id="689">夏新款条纹拼接收腰雪纺长裙连衣裙OY5214焕</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="690">
                        <span class="fl color-d number number-16" p-id="691"><span class="yuan" p-id="693">￥</span><span class="integer" p-id="695">128</span><span class="pointer" p-id="697">.</span><span class="decimal" p-id="699">00</span></span>
                        <span class="fr color-l" p-id="701">月销<span p-id="703">2426</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="704">
                        <span class="fl color-brand" p-id="705"><span p-id="706">比率：</span><span class="number number-16" p-id="708"><span class="integer" p-id="710">6</span><span class="pointer" p-id="712">.</span><span class="decimal" p-id="714">00</span><span class="percent" p-id="716">%</span></span></span>
                        <span class="fr" p-id="718"><span p-id="719">佣金：</span><span class="number number-thin number-16" p-id="721"><span class="yuan" p-id="723">￥</span><span class="integer" p-id="725">7</span><span class="pointer" p-id="727">.</span><span class="decimal" p-id="729">68</span></span></span>
                    </div>
                    <div class="content-line" p-id="731">
                        <span class="color-l" p-id="732">月支出佣金：</span>
                        <span class="color-d" p-id="734">￥<span p-id="736">14696.6</span></span>
                    </div>
                    <div class="content-line" p-id="737">
                        <span class="color-l" p-id="738">月推广量：</span>
                        <span class="color-d" p-id="740"><span p-id="741">1536</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="742">
       <span class="shop-title loaded" _ie_fix_="" mx-mouseenter="showShopInfo(263817957,1)" mx-mouseleave="hideShopInfo(263817957)" p-id="743"><span class="shop-hd" p-id="744"><span class="pubfont icon-dianpu shop-icon" p-id="745"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=263817957" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="746" data-spm-anchor-id="a219t.7900221.1998910419.116"><span p-id="748">韩都衣舍旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="749" id="mx_n_22">
            <div class="block-pop-shop-info">
                <div class="shop-rank">
                    <a href="javascript:void(0);" data-spm-anchor-id="a219t.7900221.1998910419.422"> <img style="height:12px;width:84px;" src="http://img.alicdn.com/tps/i1/TB1JCr_IpXXXXcAXFXXOK.sIXXX-190-27.png" /> </a>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">主营类目：<em class="shop-category">服饰鞋包</em></span>
                    <span>与同行业相比</span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">描述相符：4.85</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">20.16%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">服务态度：4.84</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">36.25%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">发货速度：4.83</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">37.81%</span></span>
                </div>
            </div>
        </div></span>
       <span class="tags-container fr" p-id="750">
        <!--deleted-751--><span class="tag tag-tmall mr10" title="天猫店铺" p-id="752"></span></span>
                </div>
                <div class="box-btn-group" p-id="753">
                    <a href="#" target="_blank" data-login="true" mx-click="code(527051204176)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="754" data-spm-anchor-id="a219t.7900221.1998910419.117">立即推广</a>
                    <em class="box-btn-divid" p-id="756"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(0)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=527051204176&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="757" data-spm-anchor-id="a219t.7900221.1998910419.118"><span class="pubfont" p-id="758"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="761">
                <div class="pic-box" p-id="762">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=527024382810" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=527024382810&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="763" data-spm-anchor-id="a219t.7900221.1998910419.119"><img src="http://img02.taobaocdn.com/bao/uploaded/i2/TB1i5HRLFXXXXbKXXXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="764" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="765">
                    <div class="content-line" p-id="766">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=527024382810" target="_blank" title="韩都衣舍2016新款纯棉上衣学生宽松韩范短款显瘦短袖T恤女装夏装" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=527024382810&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="767" data-spm-anchor-id="a219t.7900221.1998910419.120"><span p-id="769">韩都衣舍2016新款纯棉上衣学生宽松韩范短款显瘦短袖T恤</span><span class="H" p-id="770">女装</span><span p-id="772">夏装</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="773">
                        <span class="fl color-d number number-16" p-id="774"><span class="yuan" p-id="776">￥</span><span class="integer" p-id="778">58</span><span class="pointer" p-id="780">.</span><span class="decimal" p-id="782">00</span></span>
                        <span class="fr color-l" p-id="784">月销<span p-id="786">7702</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="787">
                        <span class="fl color-brand" p-id="788"><span p-id="789">比率：</span><span class="number number-16" p-id="791"><span class="integer" p-id="793">14</span><span class="pointer" p-id="795">.</span><span class="decimal" p-id="797">30</span><span class="percent" p-id="799">%</span></span></span>
                        <span class="fr" p-id="801"><span p-id="802">佣金：</span><span class="number number-thin number-16" p-id="804"><span class="yuan" p-id="806">￥</span><span class="integer" p-id="808">8</span><span class="pointer" p-id="810">.</span><span class="decimal" p-id="812">29</span></span></span>
                    </div>
                    <div class="content-line" p-id="814">
                        <span class="color-l" p-id="815">月支出佣金：</span>
                        <span class="color-d" p-id="817">￥<span p-id="819">28143.4</span></span>
                    </div>
                    <div class="content-line" p-id="820">
                        <span class="color-l" p-id="821">月推广量：</span>
                        <span class="color-d" p-id="823"><span p-id="824">3164</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="825">
       <span class="shop-title loaded" _ie_fix_="" mx-mouseenter="showShopInfo(263817957,1)" mx-mouseleave="hideShopInfo(263817957)" p-id="826"><span class="shop-hd" p-id="827"><span class="pubfont icon-dianpu shop-icon" p-id="828"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=263817957" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="829" data-spm-anchor-id="a219t.7900221.1998910419.121"><span p-id="831">韩都衣舍旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="832" id="mx_n_23">
            <div class="block-pop-shop-info">
                <div class="shop-rank">
                    <a href="javascript:void(0);" data-spm-anchor-id="a219t.7900221.1998910419.424"> <img style="height:12px;width:84px;" src="http://img.alicdn.com/tps/i1/TB1JCr_IpXXXXcAXFXXOK.sIXXX-190-27.png" /> </a>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">主营类目：<em class="shop-category">服饰鞋包</em></span>
                    <span>与同行业相比</span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">描述相符：4.85</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">20.16%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">服务态度：4.84</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">36.25%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">发货速度：4.83</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">37.81%</span></span>
                </div>
            </div>
        </div></span>
                    <span class="tags-container fr" p-id="833"><a href="#" data-login="true" mx-click="showDxjh(263817957,527024382810)" data-spm-click="gostr=/alimama.11;locaid=d0878f2b0" title="点击申请定向计划" class="tag tag-plan mr10" p-id="834" data-spm-anchor-id="a219t.7900221.1998910419.122"><span class="icon-wrap" p-id="835"><em class="pubfont icon-dingxiangjihua" p-id="836"></em><em class="pubfont icon-gengduoyongjin" p-id="837"></em></span></a><span class="tag tag-tmall mr10" title="天猫店铺" p-id="838"></span></span>
                </div>
                <div class="box-btn-group" p-id="839">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(527024382810)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="840" data-spm-anchor-id="a219t.7900221.1998910419.123">立即推广</a>
                    <em class="box-btn-divid" p-id="842"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(1)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=527024382810&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="843" data-spm-anchor-id="a219t.7900221.1998910419.124"><span class="pubfont" p-id="844"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="847">
                <div class="pic-box" p-id="848">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=529012871236" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=529012871236&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="849" data-spm-anchor-id="a219t.7900221.1998910419.125"><img src="http://img02.taobaocdn.com/bao/uploaded/i2/TB1st_CMXXXXXc9XVXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="850" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="851">
                    <div class="content-line" p-id="852">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=529012871236" target="_blank" title="棉立方衬衫连衣裙夏红色2016夏装新款女装棉麻提花修身中长款裙子" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=529012871236&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="853" data-spm-anchor-id="a219t.7900221.1998910419.126"><span p-id="855">棉立方衬衫连衣裙夏红色2016夏装新款</span><span class="H" p-id="856">女装</span><span p-id="858">棉麻提花修身中长款裙子</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="859">
                        <span class="fl color-d number number-16" p-id="860"><span class="yuan" p-id="862">￥</span><span class="integer" p-id="864">139</span><span class="pointer" p-id="866">.</span><span class="decimal" p-id="868">00</span></span>
                        <span class="fr color-l" p-id="870">月销<span p-id="872">2159</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="873">
                        <span class="fl color-brand" p-id="874"><span p-id="875">比率：</span><span class="number number-16" p-id="877"><span class="integer" p-id="879">6</span><span class="pointer" p-id="881">.</span><span class="decimal" p-id="883">00</span><span class="percent" p-id="885">%</span></span></span>
                        <span class="fr" p-id="887"><span p-id="888">佣金：</span><span class="number number-thin number-16" p-id="890"><span class="yuan" p-id="892">￥</span><span class="integer" p-id="894">8</span><span class="pointer" p-id="896">.</span><span class="decimal" p-id="898">34</span></span></span>
                    </div>
                    <div class="content-line" p-id="900">
                        <span class="color-l" p-id="901">月支出佣金：</span>
                        <span class="color-d" p-id="903">￥<span p-id="905">5084.26</span></span>
                    </div>
                    <div class="content-line" p-id="906">
                        <span class="color-l" p-id="907">月推广量：</span>
                        <span class="color-d" p-id="909"><span p-id="910">446</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="911">
       <span class="shop-title loaded" _ie_fix_="" mx-mouseenter="showShopInfo(520408396,1)" mx-mouseleave="hideShopInfo(520408396)" p-id="912"><span class="shop-hd" p-id="913"><span class="pubfont icon-dianpu shop-icon" p-id="914"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=520408396" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="915" data-spm-anchor-id="a219t.7900221.1998910419.127"><span p-id="917">棉立方旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="918" id="mx_n_24">
            <div class="block-pop-shop-info">
                <div class="shop-rank">
                    <a href="javascript:void(0);" data-spm-anchor-id="a219t.7900221.1998910419.420"> <img style="height:12px;width:84px;" src="http://img.alicdn.com/tps/i1/TB1JCr_IpXXXXcAXFXXOK.sIXXX-190-27.png" /> </a>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">主营类目：<em class="shop-category">服饰鞋包</em></span>
                    <span>与同行业相比</span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">描述相符：4.84</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">13.83%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">服务态度：4.81</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">26.23%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">发货速度：4.81</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">30.20%</span></span>
                </div>
            </div>
        </div></span>
                    <span class="tags-container fr" p-id="919"><a href="#" data-login="true" mx-click="showDxjh(520408396,529012871236)" data-spm-click="gostr=/alimama.11;locaid=d0878f2b0" title="点击申请定向计划" class="tag tag-plan mr10" p-id="920" data-spm-anchor-id="a219t.7900221.1998910419.128"><span class="icon-wrap" p-id="921"><em class="pubfont icon-dingxiangjihua" p-id="922"></em><em class="pubfont icon-gengduoyongjin" p-id="923"></em></span></a><span class="tag tag-tmall mr10" title="天猫店铺" p-id="924"></span></span>
                </div>
                <div class="box-btn-group" p-id="925">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(529012871236)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="926" data-spm-anchor-id="a219t.7900221.1998910419.129">立即推广</a>
                    <em class="box-btn-divid" p-id="928"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(2)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=529012871236&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="929" data-spm-anchor-id="a219t.7900221.1998910419.d272c3d68"><span class="pubfont" p-id="930"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="933">
                <div class="pic-box" p-id="934">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=529041974152" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=529041974152&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="935" data-spm-anchor-id="a219t.7900221.1998910419.131"><img src="http://img03.taobaocdn.com/bao/uploaded/i3/TB1Yof1MXXXXXXMXXXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="936" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="937">
                    <div class="content-line" p-id="938">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=529041974152" target="_blank" title="海青蓝2016夏季新款女装个性拼接不规则裙V领无袖修身连衣裙2663" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=529041974152&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="939" data-spm-anchor-id="a219t.7900221.1998910419.132"><span p-id="941">海青蓝2016夏季新款</span><span class="H" p-id="942">女装</span><span p-id="944">个性拼接不规则裙V领无袖修身连衣裙2663</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="945">
                        <span class="fl color-d number number-16" p-id="946"><span class="yuan" p-id="948">￥</span><span class="integer" p-id="950">278</span><span class="pointer" p-id="952">.</span><span class="decimal" p-id="954">00</span></span>
                        <span class="fr color-l" p-id="956">月销<span p-id="958">688</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="959">
                        <span class="fl color-brand" p-id="960"><span p-id="961">比率：</span><span class="number number-16" p-id="963"><span class="integer" p-id="965">14</span><span class="pointer" p-id="967">.</span><span class="decimal" p-id="969">30</span><span class="percent" p-id="971">%</span></span></span>
                        <span class="fr" p-id="973"><span p-id="974">佣金：</span><span class="number number-thin number-16" p-id="976"><span class="yuan" p-id="978">￥</span><span class="integer" p-id="980">39</span><span class="pointer" p-id="982">.</span><span class="decimal" p-id="984">75</span></span></span>
                    </div>
                    <div class="content-line" p-id="986">
                        <span class="color-l" p-id="987">月支出佣金：</span>
                        <span class="color-d" p-id="989">￥<span p-id="991">4229.81</span></span>
                    </div>
                    <div class="content-line" p-id="992">
                        <span class="color-l" p-id="993">月推广量：</span>
                        <span class="color-d" p-id="995"><span p-id="996">109</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="997">
       <span class="shop-title loaded" _ie_fix_="" mx-mouseenter="showShopInfo(898571545,1)" mx-mouseleave="hideShopInfo(898571545)" p-id="998"><span class="shop-hd" p-id="999"><span class="pubfont icon-dianpu shop-icon" p-id="1000"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=898571545" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1001" data-spm-anchor-id="a219t.7900221.1998910419.133"><span p-id="1003">海青蓝旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1004" id="mx_n_25">
            <div class="block-pop-shop-info">
                <div class="shop-rank">
                    <a href="javascript:void(0);" data-spm-anchor-id="a219t.7900221.1998910419.410"> <img style="height:12px;width:84px;" src="http://img.alicdn.com/tps/i1/TB1JCr_IpXXXXcAXFXXOK.sIXXX-190-27.png" /> </a>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">主营类目：<em class="shop-category">服饰鞋包</em></span>
                    <span>与同行业相比</span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">描述相符：4.82</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">2.79%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">服务态度：4.77</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">6.73%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">发货速度：4.75</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">6.71%</span></span>
                </div>
            </div>
        </div></span>
       <span class="tags-container fr" p-id="1005">
        <!--deleted-1006--><span class="tag tag-tmall mr10" title="天猫店铺" p-id="1007"></span></span>
                </div>
                <div class="box-btn-group" p-id="1008">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(529041974152)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1009" data-spm-anchor-id="a219t.7900221.1998910419.134">立即推广</a>
                    <em class="box-btn-divid" p-id="1011"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(3)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=529041974152&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1012" data-spm-anchor-id="a219t.7900221.1998910419.135"><span class="pubfont" p-id="1013"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1016">
                <div class="pic-box" p-id="1017">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=527288664444" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=527288664444&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1018" data-spm-anchor-id="a219t.7900221.1998910419.136"><img src="http://img02.taobaocdn.com/bao/uploaded/i2/TB1zU3BLFXXXXXuXVXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="1019" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1020">
                    <div class="content-line" p-id="1021">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=527288664444" target="_blank" title="棉立方休闲打底卫衣女2016春装新款女装韩版绣花套头宽松卫衣" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=527288664444&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1022" data-spm-anchor-id="a219t.7900221.1998910419.137"><span p-id="1024">棉立方休闲打底卫衣女2016春装新款</span><span class="H" p-id="1025">女装</span><span p-id="1027">韩版绣花套头宽松卫衣</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1028">
                        <span class="fl color-d number number-16" p-id="1029"><span class="yuan" p-id="1031">￥</span><span class="integer" p-id="1033">109</span><span class="pointer" p-id="1035">.</span><span class="decimal" p-id="1037">00</span></span>
                        <span class="fr color-l" p-id="1039">月销<span p-id="1041">1312</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1042">
                        <span class="fl color-brand" p-id="1043"><span p-id="1044">比率：</span><span class="number number-16" p-id="1046"><span class="integer" p-id="1048">6</span><span class="pointer" p-id="1050">.</span><span class="decimal" p-id="1052">00</span><span class="percent" p-id="1054">%</span></span></span>
                        <span class="fr" p-id="1056"><span p-id="1057">佣金：</span><span class="number number-thin number-16" p-id="1059"><span class="yuan" p-id="1061">￥</span><span class="integer" p-id="1063">6</span><span class="pointer" p-id="1065">.</span><span class="decimal" p-id="1067">54</span></span></span>
                    </div>
                    <div class="content-line" p-id="1069">
                        <span class="color-l" p-id="1070">月支出佣金：</span>
                        <span class="color-d" p-id="1072">￥<span p-id="1074">6397.01</span></span>
                    </div>
                    <div class="content-line" p-id="1075">
                        <span class="color-l" p-id="1076">月推广量：</span>
                        <span class="color-d" p-id="1078"><span p-id="1079">673</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1080">
       <span class="shop-title" _ie_fix_="" mx-mouseenter="showShopInfo(520408396,1)" mx-mouseleave="hideShopInfo(520408396)" p-id="1081"><span class="shop-hd" p-id="1082"><span class="pubfont icon-dianpu shop-icon" p-id="1083"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=520408396" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1084" data-spm-anchor-id="a219t.7900221.1998910419.138"><span p-id="1086">棉立方旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1087" id="mx_n_26"></div></span>
                    <span class="tags-container fr" p-id="1088"><a href="#" data-login="true" mx-click="showDxjh(520408396,527288664444)" data-spm-click="gostr=/alimama.11;locaid=d0878f2b0" title="点击申请定向计划" class="tag tag-plan mr10" p-id="1089" data-spm-anchor-id="a219t.7900221.1998910419.139"><span class="icon-wrap" p-id="1090"><em class="pubfont icon-dingxiangjihua" p-id="1091"></em><em class="pubfont icon-gengduoyongjin" p-id="1092"></em></span></a><span class="tag tag-tmall mr10" title="天猫店铺" p-id="1093"></span></span>
                </div>
                <div class="box-btn-group" p-id="1094">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(527288664444)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1095" data-spm-anchor-id="a219t.7900221.1998910419.140">立即推广</a>
                    <em class="box-btn-divid" p-id="1097"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(4)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=527288664444&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1098" data-spm-anchor-id="a219t.7900221.1998910419.141"><span class="pubfont" p-id="1099"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1102">
                <div class="pic-box" p-id="1103">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=528099845225" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=528099845225&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1104" data-spm-anchor-id="a219t.7900221.1998910419.142"><img src="http://img04.taobaocdn.com/bao/uploaded/i4/TB1mAzkHVXXXXc3XpXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="1105" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1106">
                    <div class="content-line" p-id="1107">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=528099845225" target="_blank" title="预售）Amii[极简主义]2016女装夏新款蕾丝连衣裙短袖显瘦修身短裙" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=528099845225&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1108" data-spm-anchor-id="a219t.7900221.1998910419.143"><span p-id="1110">预售）Amii[极简主义]2016</span><span class="H" p-id="1111">女装</span><span p-id="1113">夏新款蕾丝连衣裙短袖显瘦修身短裙</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1114">
                        <span class="fl color-d number number-16" p-id="1115"><span class="yuan" p-id="1117">￥</span><span class="integer" p-id="1119">119</span><span class="pointer" p-id="1121">.</span><span class="decimal" p-id="1123">00</span></span>
                        <span class="fr color-l" p-id="1125">月销<span p-id="1127">911</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1128">
                        <span class="fl color-brand" p-id="1129"><span p-id="1130">比率：</span><span class="number number-16" p-id="1132"><span class="integer" p-id="1134">6</span><span class="pointer" p-id="1136">.</span><span class="decimal" p-id="1138">00</span><span class="percent" p-id="1140">%</span></span></span>
                        <span class="fr" p-id="1142"><span p-id="1143">佣金：</span><span class="number number-thin number-16" p-id="1145"><span class="yuan" p-id="1147">￥</span><span class="integer" p-id="1149">7</span><span class="pointer" p-id="1151">.</span><span class="decimal" p-id="1153">14</span></span></span>
                    </div>
                    <div class="content-line" p-id="1155">
                        <span class="color-l" p-id="1156">月支出佣金：</span>
                        <span class="color-d" p-id="1158">￥<span p-id="1160">4996.06</span></span>
                    </div>
                    <div class="content-line" p-id="1161">
                        <span class="color-l" p-id="1162">月推广量：</span>
                        <span class="color-d" p-id="1164"><span p-id="1165">614</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1166">
       <span class="shop-title" _ie_fix_="" mx-mouseenter="showShopInfo(451135386,1)" mx-mouseleave="hideShopInfo(451135386)" p-id="1167"><span class="shop-hd" p-id="1168"><span class="pubfont icon-dianpu shop-icon" p-id="1169"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=451135386" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1170" data-spm-anchor-id="a219t.7900221.1998910419.144"><span p-id="1172">amii旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1173" id="mx_n_27"></div></span>
                    <span class="tags-container fr" p-id="1174"><a href="#" data-login="true" mx-click="showDxjh(451135386,528099845225)" data-spm-click="gostr=/alimama.11;locaid=d0878f2b0" title="点击申请定向计划" class="tag tag-plan mr10" p-id="1175" data-spm-anchor-id="a219t.7900221.1998910419.145"><span class="icon-wrap" p-id="1176"><em class="pubfont icon-dingxiangjihua" p-id="1177"></em><em class="pubfont icon-gengduoyongjin" p-id="1178"></em></span></a><span class="tag tag-tmall mr10" title="天猫店铺" p-id="1179"></span></span>
                </div>
                <div class="box-btn-group" p-id="1180">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(528099845225)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1181" data-spm-anchor-id="a219t.7900221.1998910419.146">立即推广</a>
                    <em class="box-btn-divid" p-id="1183"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(5)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=528099845225&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1184" data-spm-anchor-id="a219t.7900221.1998910419.147"><span class="pubfont" p-id="1185"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1188">
                <div class="pic-box" p-id="1189">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=528598726305" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=528598726305&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1190" data-spm-anchor-id="a219t.7900221.1998910419.148"><img src="http://img01.taobaocdn.com/bao/uploaded/i1/TB17FM8MXXXXXXlXVXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="1191" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1192">
                    <div class="content-line" p-id="1193">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=528598726305" target="_blank" title="2016新款潮夏季韩版宽松短袖T恤女五分袖短款体恤衫上衣女装春装" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=528598726305&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1194" data-spm-anchor-id="a219t.7900221.1998910419.149"><span p-id="1196">2016新款潮夏季韩版宽松短袖T恤女五分袖短款体恤衫上衣</span><span class="H" p-id="1197">女装</span><span p-id="1199">春装</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1200">
                        <span class="fl color-d number number-16" p-id="1201"><span class="yuan" p-id="1203">￥</span><span class="integer" p-id="1205">59</span><span class="pointer" p-id="1207">.</span><span class="decimal" p-id="1209">00</span></span>
                        <span class="fr color-l" p-id="1211">月销<span p-id="1213">8400</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1214">
                        <span class="fl color-brand" p-id="1215"><span p-id="1216">比率：</span><span class="number number-16" p-id="1218"><span class="integer" p-id="1220">6</span><span class="pointer" p-id="1222">.</span><span class="decimal" p-id="1224">00</span><span class="percent" p-id="1226">%</span></span></span>
                        <span class="fr" p-id="1228"><span p-id="1229">佣金：</span><span class="number number-thin number-16" p-id="1231"><span class="yuan" p-id="1233">￥</span><span class="integer" p-id="1235">3</span><span class="pointer" p-id="1237">.</span><span class="decimal" p-id="1239">54</span></span></span>
                    </div>
                    <div class="content-line" p-id="1241">
                        <span class="color-l" p-id="1242">月支出佣金：</span>
                        <span class="color-d" p-id="1244">￥<span p-id="1246">10489.2</span></span>
                    </div>
                    <div class="content-line" p-id="1247">
                        <span class="color-l" p-id="1248">月推广量：</span>
                        <span class="color-d" p-id="1250"><span p-id="1251">1077</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1252">
       <span class="shop-title" _ie_fix_="" mx-mouseenter="showShopInfo(1734524150,1)" mx-mouseleave="hideShopInfo(1734524150)" p-id="1253"><span class="shop-hd" p-id="1254"><span class="pubfont icon-dianpu shop-icon" p-id="1255"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=1734524150" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1256" data-spm-anchor-id="a219t.7900221.1998910419.150"><span p-id="1258">歌慕妮旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1259" id="mx_n_28"></div></span>
                    <span class="tags-container fr" p-id="1260"><a href="#" data-login="true" mx-click="showDxjh(1734524150,528598726305)" data-spm-click="gostr=/alimama.11;locaid=d0878f2b0" title="点击申请定向计划" class="tag tag-plan mr10" p-id="1261" data-spm-anchor-id="a219t.7900221.1998910419.151"><span class="icon-wrap" p-id="1262"><em class="pubfont icon-dingxiangjihua" p-id="1263"></em><em class="pubfont icon-gengduoyongjin" p-id="1264"></em></span></a><span class="tag tag-tmall mr10" title="天猫店铺" p-id="1265"></span></span>
                </div>
                <div class="box-btn-group" p-id="1266">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(528598726305)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1267" data-spm-anchor-id="a219t.7900221.1998910419.152">立即推广</a>
                    <em class="box-btn-divid" p-id="1269"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(6)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=528598726305&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1270" data-spm-anchor-id="a219t.7900221.1998910419.153"><span class="pubfont" p-id="1271"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1274">
                <div class="pic-box" p-id="1275">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=530291762373" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=530291762373&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1276" data-spm-anchor-id="a219t.7900221.1998910419.154"><img src="http://img02.taobaocdn.com/bao/uploaded/i2/TB1RLOxJVXXXXamXVXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="1277" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1278">
                    <div class="content-line" p-id="1279">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=530291762373" target="_blank" title="丹慕妮尔半开领a字裙子夏2016夏季新款女装复古印花连衣裙夏2624" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=530291762373&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1280" data-spm-anchor-id="a219t.7900221.1998910419.155"><span p-id="1282">丹慕妮尔半开领a字裙子夏2016夏季新款</span><span class="H" p-id="1283">女装</span><span p-id="1285">复古印花连衣裙夏2624</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1286">
                        <span class="fl color-d number number-16" p-id="1287"><span class="yuan" p-id="1289">￥</span><span class="integer" p-id="1291">298</span><span class="pointer" p-id="1293">.</span><span class="decimal" p-id="1295">80</span></span>
                        <span class="fr color-l" p-id="1297">月销<span p-id="1299">1293</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1300">
                        <span class="fl color-brand" p-id="1301"><span p-id="1302">比率：</span><span class="number number-16" p-id="1304"><span class="integer" p-id="1306">7</span><span class="pointer" p-id="1308">.</span><span class="decimal" p-id="1310">00</span><span class="percent" p-id="1312">%</span></span></span>
                        <span class="fr" p-id="1314"><span p-id="1315">佣金：</span><span class="number number-thin number-16" p-id="1317"><span class="yuan" p-id="1319">￥</span><span class="integer" p-id="1321">20</span><span class="pointer" p-id="1323">.</span><span class="decimal" p-id="1325">92</span></span></span>
                    </div>
                    <div class="content-line" p-id="1327">
                        <span class="color-l" p-id="1328">月支出佣金：</span>
                        <span class="color-d" p-id="1330">￥<span p-id="1332">7333.59</span></span>
                    </div>
                    <div class="content-line" p-id="1333">
                        <span class="color-l" p-id="1334">月推广量：</span>
                        <span class="color-d" p-id="1336"><span p-id="1337">275</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1338">
       <span class="shop-title" _ie_fix_="" mx-mouseenter="showShopInfo(773610237,1)" mx-mouseleave="hideShopInfo(773610237)" p-id="1339"><span class="shop-hd" p-id="1340"><span class="pubfont icon-dianpu shop-icon" p-id="1341"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=773610237" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1342" data-spm-anchor-id="a219t.7900221.1998910419.156"><span p-id="1344">丹慕妮尔旗舰店</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1345" id="mx_n_29"></div></span>
       <span class="tags-container fr" p-id="1346">
        <!--deleted-1347--><span class="tag tag-tmall mr10" title="天猫店铺" p-id="1348"></span></span>
                </div>
                <div class="box-btn-group" p-id="1349">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(530291762373)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1350" data-spm-anchor-id="a219t.7900221.1998910419.157">立即推广</a>
                    <em class="box-btn-divid" p-id="1352"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(7)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=530291762373&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1353" data-spm-anchor-id="a219t.7900221.1998910419.158"><span class="pubfont" p-id="1354"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1357">
                <div class="pic-box" p-id="1358">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=525503083334" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=525503083334&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1359" data-spm-anchor-id="a219t.7900221.1998910419.159"><img src="http://img03.taobaocdn.com/bao/uploaded/i3/TB1i7KBIpXXXXbFXFXXXXXXXXXX_!!0-item_pic.jpg_220x220_.webp" p-id="1360" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1361">
                    <div class="content-line" p-id="1362">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=525503083334" target="_blank" title="夏季女装连衣裙中裙印花雪纺衫短袖两件套显瘦蕾丝包臀裙裙子套装" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=525503083334&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1363" data-spm-anchor-id="a219t.7900221.1998910419.160"><span p-id="1365">夏季</span><span class="H" p-id="1366">女装</span><span p-id="1368">连衣裙中裙印花雪纺衫短袖两件套显瘦蕾丝包臀裙裙子套装</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1369">
                        <span class="fl color-d number number-16" p-id="1370"><span class="yuan" p-id="1372">￥</span><span class="integer" p-id="1374">29</span><span class="pointer" p-id="1376">.</span><span class="decimal" p-id="1378">00</span></span>
                        <span class="fr color-l" p-id="1380">月销<span p-id="1382">13923</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1383">
                        <span class="fl color-brand" p-id="1384"><span p-id="1385">比率：</span><span class="number number-16" p-id="1387"><span class="integer" p-id="1389">21</span><span class="pointer" p-id="1391">.</span><span class="decimal" p-id="1393">00</span><span class="percent" p-id="1395">%</span></span></span>
                        <span class="fr" p-id="1397"><span p-id="1398">佣金：</span><span class="number number-thin number-16" p-id="1400"><span class="yuan" p-id="1402">￥</span><span class="integer" p-id="1404">6</span><span class="pointer" p-id="1406">.</span><span class="decimal" p-id="1408">09</span></span></span>
                    </div>
                    <div class="content-line" p-id="1410">
                        <span class="color-l" p-id="1411">月支出佣金：</span>
                        <span class="color-d" p-id="1413">￥<span p-id="1415">41645</span></span>
                    </div>
                    <div class="content-line" p-id="1416">
                        <span class="color-l" p-id="1417">月推广量：</span>
                        <span class="color-d" p-id="1419"><span p-id="1420">2220</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1421">
       <span class="shop-title" _ie_fix_="" mx-mouseenter="showShopInfo(2333888723,0)" mx-mouseleave="hideShopInfo(2333888723)" p-id="1422"><span class="shop-hd" p-id="1423"><span class="pubfont icon-dianpu shop-icon" p-id="1424"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=2333888723" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1425" data-spm-anchor-id="a219t.7900221.1998910419.161"><span p-id="1427">杰克锐利精品女装</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1428" id="mx_n_30"></div></span>
       <span class="tags-container fr" p-id="1429">
        <!--deleted-1430-->
           <!--deleted-1431--></span>
                </div>
                <div class="box-btn-group" p-id="1432">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(525503083334)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1433" data-spm-anchor-id="a219t.7900221.1998910419.162">立即推广</a>
                    <em class="box-btn-divid" p-id="1435"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(8)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=525503083334&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1436" data-spm-anchor-id="a219t.7900221.1998910419.163"><span class="pubfont" p-id="1437"></span>选取</a>
                </div>
            </div>
            <div class="block-search-box tag-wrap" p-id="1440">
                <div class="pic-box" p-id="1441">
                    <a class="search-box-img" href="http://item.taobao.com/item.htm?id=527384526203" target="_blank" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d30ccd691;itemid=527384526203&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1442" data-spm-anchor-id="a219t.7900221.1998910419.164"><img src="http://img03.taobaocdn.com/bao/uploaded/i3/928615121/TB23o7MkFXXXXcbXXXXXXXXXXXX_!!928615121.jpg_220x220_.webp" p-id="1443" /></a>
                </div>
                <div class="box-content" _ie_fix_="" mx-mouseenter="showContent()" mx-mouseleave="hideContent()" p-id="1444">
                    <div class="content-line" p-id="1445">
                        <a class="color-m content-title" href="http://item.taobao.com/item.htm?id=527384526203" target="_blank" title="伊人乐乐欧洲站2016春装新款桑蚕丝抽象印花大码真丝连衣裙女装夏" goldclick="true" data-spm-click="gostr=/alimama.11;locaid=d5d3d3cdd;itemid=527384526203&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1000" p-id="1446" data-spm-anchor-id="a219t.7900221.1998910419.165"><span p-id="1448">伊人乐乐欧洲站2016春装新款桑蚕丝抽象印花大码真丝连衣裙</span><span class="H" p-id="1449">女装</span><span p-id="1451">夏</span></a>
                    </div>
                    <div class="content-line clearfix" p-id="1452">
                        <span class="fl color-d number number-16" p-id="1453"><span class="yuan" p-id="1455">￥</span><span class="integer" p-id="1457">289</span><span class="pointer" p-id="1459">.</span><span class="decimal" p-id="1461">00</span></span>
                        <span class="fr color-l" p-id="1463">月销<span p-id="1465">1370</span></span>
                    </div>
                    <div class="content-line clearfix" p-id="1466">
                        <span class="fl color-brand" p-id="1467"><span p-id="1468">比率：</span><span class="number number-16" p-id="1470"><span class="integer" p-id="1472">5</span><span class="pointer" p-id="1474">.</span><span class="decimal" p-id="1476">00</span><span class="percent" p-id="1478">%</span></span></span>
                        <span class="fr" p-id="1480"><span p-id="1481">佣金：</span><span class="number number-thin number-16" p-id="1483"><span class="yuan" p-id="1485">￥</span><span class="integer" p-id="1487">14</span><span class="pointer" p-id="1489">.</span><span class="decimal" p-id="1491">45</span></span></span>
                    </div>
                    <div class="content-line" p-id="1493">
                        <span class="color-l" p-id="1494">月支出佣金：</span>
                        <span class="color-d" p-id="1496">￥<span p-id="1498">4556.34</span></span>
                    </div>
                    <div class="content-line" p-id="1499">
                        <span class="color-l" p-id="1500">月推广量：</span>
                        <span class="color-d" p-id="1502"><span p-id="1503">308</span></span>
                    </div>
                </div>
                <div class="box-shop-info" p-id="1504">
       <span class="shop-title loaded" _ie_fix_="" mx-mouseenter="showShopInfo(928615121,0)" mx-mouseleave="hideShopInfo(928615121)" p-id="1505"><span class="shop-hd" p-id="1506"><span class="pubfont icon-dianpu shop-icon" p-id="1507"></span><a vclick-ignore="true" title="点击进入店铺推广详情页" href="/myunion.htm?#!/promo/self/shop_detail?userNumberId=928615121" data-spm-click="gostr=/alimama.11;locaid=dab027959" target="_blank" p-id="1508" data-spm-anchor-id="a219t.7900221.1998910419.166"><span p-id="1510">伊人乐乐高端女装</span></a></span>
        <div class="shop-bd" mx-vframe="true" p-id="1511" id="mx_n_31">
            <div class="block-pop-shop-info">
                <div class="shop-rank">
                    <a href="javascript:void(0);" data-spm-anchor-id="a219t.7900221.1998910419.427"> <img src="http://pics.taobaocdn.com/newrank/s_cap_4.gif" /> </a>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">主营类目：<em class="shop-category">服饰鞋包</em></span>
                    <span>与同行业相比</span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">描述相符：4.82</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">29.99%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">服务态度：4.84</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">25.15%</span></span>
                </div>
                <div class="shop-line">
                    <span class="shop-inline">发货速度：4.83</span>
                    <span class="morethan"><span class="score-tag">高于</span><span class="score">24.30%</span></span>
                </div>
            </div>
        </div></span>
       <span class="tags-container fr" p-id="1512">
        <!--deleted-1513-->
           <!--deleted-1514--></span>
                </div>
                <div class="box-btn-group" p-id="1515">
                    <a href="javascript:void(0);" data-login="true" mx-click="code(527384526203)" data-spm-click="gostr=/alimama.11;locaid=d64736c94" class="box-btn-left" p-id="1516" data-spm-anchor-id="a219t.7900221.1998910419.167">立即推广</a>
                    <em class="box-btn-divid" p-id="1518"></em>
                    <a href="javascript:void(0);" mx-click="selectItem(9)" data-spm-click="gostr=/alimama.11;locaid=d272c3d68;itemid=527384526203&amp;pvid=10_113.97.151.151_907150_1463852607255&amp;actionid=1001" class="box-btn-right" p-id="1519" data-spm-anchor-id="a219t.7900221.1998910419.168"><span class="pubfont" p-id="1520"></span>选取</a>
                </div>
            </div>

    <div bx-name="app/exts/pagination/pagination" data-total="5000" data-limit="50" data-cursor="1">
        <div class="pagination-new">
            <div class="pagination">
                <a href="javascript: void(0);" class="btn-first btn btn-xlarge btn-unreach" bx-click="moveTo(0)" data-spm-anchor-id="a219t.7900221.1998910419.392"><span class="pubfont"></span>上一页</a>
                <!-- Previous -->
                <a href="javascript: void(0);" class="btn btn-xlarge btn-current" data-spm-anchor-id="a219t.7900221.1998910419.393">1</a>
                <a href="javascript: void(0);" bx-click="moveTo(2)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.394">2</a>
                <a href="javascript: void(0);" bx-click="moveTo(3)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.395">3</a>
                <a href="javascript: void(0);" bx-click="moveTo(4)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.396">4</a>
                <a href="javascript: void(0);" bx-click="moveTo(5)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.397">5</a>
                <a href="javascript: void(0);" bx-click="moveTo(6)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.398">6</a>
                <a href="javascript: void(0);" bx-click="moveTo(7)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.399">7</a>
                <span class="m n">...</span>
                <a href="javascript: void(0);" bx-click="moveTo(100)" class="btn btn-xlarge btn-white" data-spm-anchor-id="a219t.7900221.1998910419.400">100</a>
                <a href="javascript: void(0);" class="btn-last btn btn-xlarge btn-white" bx-click="moveTo(2)" data-spm-anchor-id="a219t.7900221.1998910419.401">下一页<span class="pubfont"></span></a>
                <!-- Next -->
            </div>
            <div class="go">
                <span class="n">到第</span>
                <input class="input" type="text" value="2" />
                <span class="n">页</span>
                <button class="btn btn-small btn-white" bx-click="goToPage()">确定</button>
            </div>
        </div>
    </div>
</div>