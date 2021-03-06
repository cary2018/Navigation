<?php
/**
 * 留言板
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title='留言板';
?>

<?=Html::cssFile('@web/css/style.css'.'?'.uniqid())?>

<!--合作联系标题-->
<div class="container_full title_coloumn">
    <span class="cn">留言板</span>
</div>
<div class="container_1000 m_center cf b_70 container_applay">

    <!--留言板-->
    <div class="applay_left f_">
        <p class="title_applay b_30">对于本站有什么意见或建议请给本站留言，站长会尽快和您联系！</p>
        <?php $form = ActiveForm::begin(['action' => ['addmes'],'method'=>'post',]); ?>
            <table class="table_applay" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>
                        <label>
                            <div class="icon_applay">
                                <span class="icon_user"></span>
                                <span class="bg"></span>
                                <span class="bg bg2"></span>
                            </div>
                            <?= $form->field($model, 'username')->textInput(['placeholder'=>'*输入您的姓名','class' => 'input_applay'])->label(false) ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="js_label">
                            <div class="icon_applay">
                                <span class="icon_phone"></span>
                                <span class="bg"></span>
                                <span class="bg bg2"></span>
                            </div>
                            <?= $form->field($model, 'email')->textInput(['placeholder'=>'*输入您联系邮箱地址','class' => 'input_applay'])->label(false) ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="js_label">
                            <div class="icon_applay">
                                <span class="icon_xuqiu"></span>
                                <span class="bg"></span>
                                <span class="bg bg2"></span>
                            </div>
                            <?= $form->field($model, 'content')->textarea(['placeholder'=>'简单描述您的需求...','class' => 'input_applay input_applay_area'])->label(false) ?>
                        </label>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        <p id="js_tip" class="form_tip"></p>
                        <input type="submit" value="提交" class="btn_submit" />
                    </td>
                </tr>
                </tfoot>
            </table>
        <?php ActiveForm::end(); ?>
    </div>

    <div class="contact f_r">联系邮箱地址：cary889@qq.com</div>

</div>