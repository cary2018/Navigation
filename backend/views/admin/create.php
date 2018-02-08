<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = '添加管理员';

?>
<?=Html::cssFile('@web/css/style.css')?>
<h1><?= Html::encode($this->title) ?></h1>
<div clas="create-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="nav-1 lab">
        <?= $form->field($model, 'username')->textInput() ?>
    </div>
    <div class="nav-2 lab">
        <?= $form->field($model, 'email')->textInput() ?>
    </div>
    <div class="nav-2 lab">
        <?= $form->field($model, 'password')->passwordInput() ?>
    </div>
    <div class="nav-2 lab">
        <div class="form-group field-admin-password required has-success">
            <label class="control-label" for="admin-password">确认密码</label>
            <input type="password" id="admin-password" class="form-control" name="password2" value="">
            <div class="help-block"></div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '提交' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
