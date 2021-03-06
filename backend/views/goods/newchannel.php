<?php
/**
 *
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 *
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?= Html::cssFile('@web/css/style.css?'.uniqid()) ?>
<h1>创建商品渠道</h1>
<?= Html::a('返回列表', ['channel'], ['class' => 'link_btn']) ?>
<?php $form=ActiveForm::begin(['action' => ['addchannel'],'method'=>'post']) ?>

<ul class="ulColumn2">
    <li>
        <?= $form->field($model,'channel_name')->textInput(['class'=>'textbox textbox_295']) ?>
    </li>
    <li>
        <?= $form->field($model,'channel_keyword')->textInput(['class'=>'textbox textbox_295','placeholder'=>Yii::t('app','关键词')])?>
    </li>
    <li>
        <?= $form->field($model,'channel_description')->textarea(['class'=>'textarea','style'=>'width:500px;height:100px;']) ?>
    </li>
    <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn"/>
    </li>
</ul>

<?php ActiveForm::end() ?>
