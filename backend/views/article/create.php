<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '添加文章';

?>
<?=Html::jsFile('@web/js/jquery-1.9.1.min.js')?>
<?=Html::cssFile('@web/css/style.css')?>
<h1><?= Html::a('返回列表',['index'],['class'=>'link_btn'])?></h1>
<div class="admin-create">
    <ul class="men">
        <li class="sel" title="d1">基本信息</li>
        <li title="d2">新闻内容</li>
    </ul>
    <div class="admin-form">
        <?php $form = ActiveForm::begin(); ?>
        <div style="width:1200px;">
            <div id="d1">
                <div class="nav-1 lab">
                    <?= $form->field($model, 'title')->textInput() ?>
                </div>
                <div class="nav-3 lab">
                    <?php echo $form->field($model, 'pid')->dropDownList($listData,['prompt'=>'请选择分类','style'=>'width:130px']) ?>
                </div>
                <div class="nav-2 lab">
                    <?= $form->field($model, 'keywords')->textInput(['placeholder'=>Yii::t('app','文章关键字')]) ?>
                </div>
                <div class="nav-4 lab">
                    <?= $form->field($model, 'description')->textarea(['rows'=>5,'placeholder'=>Yii::t('app','文章简介')]) ?>
                </div>
                <div class="nav-3 lab">
                    <?= $form->field($model, 'is_show')->radioList(['0'=>'保存','1'=>'发布']) ?>
                </div>
            </div>
            <div id="d2" style="display:none;">
                <?php
                use ueditor_cary\ueditor\Ueditor;
                echo $form->field($model,'content')->widget(
                    Ueditor::className(),
                    [
                        'ucontent'=>$model->content,    //初始化内容
                        'id'=>'Article[content]',   //提交表单的名称
                        'options' => [
                            'initialFrameHeight' => '350',
                            'autoHeightEnabled' => false,
                            'autoFloadEnabled' => true,
                        ],
                    ]
                );
                ?>
            </div>
        </div>
    </div>
    <div class="form-group lab">
        <?= Html::submitButton('创建', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<script type="text/javascript">
    $(function() {
        $(".men li").click(tab);
        function tab() {
            $(this).addClass("sel").siblings().removeClass("sel");
            var tab = $(this).attr("title");
            $("#" + tab).show().siblings().hide();
        };
    });
</script>
