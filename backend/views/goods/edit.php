<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = '更新产品';

?>
<?=Html::jsFile('@web/js/jquery-1.9.1.min.js')?>
<?=Html::cssFile('@web/css/style.css')?>
<?= Html::a('返回列表', ['index'], ['class' => 'btn btn-success']) ?>
<div class="admin-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <ul class="men">
        <li class="sel" title="d1">通用信息</li>
        <li title="d2">描述信息</li>
        <li title="d3">其它信息</li>
    </ul>

    <div class="admin-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <div>
            <div id="d1">
                <div class="nav-1 lab">
                    <?= $form->field($model, 'goods_name')->textInput() ?>
                </div>
                <div class="nav-3 lab">
                    <?php echo $form->field($model, 'cat_id')->dropDownList($listData,['prompt'=>'请选择分类','style'=>'width:150px']) ?>
                </div>
                <div class="nav-3 lab">
                    <?php echo $form->field($model, 'channel_id')->dropDownList($listChannel,['prompt'=>'默认渠道','style'=>'width:150px']) ?>
                </div>
                <div class="nav-2 lab">
                    <?= $form->field($model, 'goods_id')->textInput() ?>
                </div>
                <div class="nav-2 lab">
                    <?= $form->field($model, 'goods_prices')->textInput() ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'filename')->fileInput(['multiple' => true]) ?>
                    <?=$model->goods_img?>
                    <span style="display:none;">
                    <?= $form->field($model, 'goods_img')->hiddenInput()->hint('')->label('') ?>
                </span>
                </div>
                <div class="nav-2 lab">
                    <?= $form->field($model, 'taobao_links')->textInput() ?>
                </div>
            </div>

            <div id="d2" style="display:none">
                <div class="nav-2 lab">
                    <?= $form->field($model, 'goods_url')->textInput() ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'shop_name')->textInput() ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'goods_sales')->textInput() ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'income_ratio')->textInput() ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'shop_wan')->textInput(['placeholder' => Yii::t('app', '卖家旺旺联系帐号!')]) ?>
                </div>
            </div>
            <div id="d3" style="display:none">
                <div class="nav-2 lab">
                    <?= $form->field($model, 'short_links')->textInput() ?>
                </div>

                <div class="is_nav">
                    <span>
                        <?= $form->field($model, 'is_best')->checkbox() ?>
                    </span>
                    <span>
                        <?= $form->field($model, 'is_new')->checkbox() ?>
                    </span>
                    <span>
                        <?= $form->field($model, 'is_hot')->checkbox() ?>
                    </span>
                </div>
                <div class="is_show">
                    <?= $form->field($model, 'is_show')->radioList(['0'=>'上架','1'=>'下架'])  ?>
                </div>
                <div class="nav-1 lab">
                    <?= $form->field($model, 'sort_order')->textInput(['value' => Yii::t('app', '100')]) ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>

<script type="text/javascript">
    $(function() {
        $(".men  li").click(tab);
        function tab() {
            $(this).addClass("sel").siblings().removeClass("sel");
            var tab = $(this).attr("title");
            $("#" + tab).show().siblings().hide();
        };
    });
</script>

