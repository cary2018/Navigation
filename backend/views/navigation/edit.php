<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title='编辑－'.$model->nav_name;

?>

<?=Html::cssFile('@web/css/style.css')?>

<h1><?= Html::a('返回列表',['index'],['class'=>'btn btn-success'])?></h1>

<div clas="create-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="nav-1 lab">
        <?= $form->field($model,'nav_name')->textInput(['placeholder'=>Yii::t('app','示例:某某网')]) ?>
    </div>
    <div class="nav-2 lab">
        <?= $form->field($model,'nav_url')->textInput(['placeholder'=>Yii::t('app','示例:xxx.xxx.com')]) ?>
    </div>
    <div class="nav-1 lab">
        <?= $form->field($model,'sun_name')->textInput(['placeholder'=>Yii::t('app','示例:某某网')]) ?>
    </div>
    <div class="nav-2 lab">
        <?= $form->field($model,'sun_url')->textInput(['placeholder'=>Yii::t('app','示例:xxx.xxx.com')]) ?>
    </div>
    <div class="nav-3 lab">
        <?php echo $form->field($model, 'nav_pid')->dropDownList($listData,['prompt'=>'请选择分类','style'=>'width:130px']) ?>
    </div>
    <div class="nav-1 lab">
        <?php echo $form->field($model, 'ordery')->textInput(); ?>
    </div>
    <div class="nav-2 lab">
        <?= $form->field($model,'keywords')->textInput()?>
    </div>
    <div class="nav-4 lab">
        <?= $form->field($model,'description')->textarea()?>
    </div>
    <div class="is_nav">
        <span>
            <?= $form->field($model, 'is_target')->checkbox() ?>
        </span>
        <span>
            <?= $form->field($model, 'is_show')->checkbox() ?>
        </span>
    </div>
    <div class="form-group">
        <?= Html::submitButton('更新',['class'=>'btn btn-primary'])?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
