<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = '更新管理员信息: ' . ' ' . $model->username;

?>
<?=Html::cssFile(['@web/css/style.css'])?>

<div class="goods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>
    <div class="nav-2 lab">
        <?= $form->field($model, 'email')->textInput() ?>
    </div>
    <div class="nav-2 lab">
        <div class="form-group field-admin-password required has-success">
            <label class="control-label" for="admin-password">密码</label>
            <input type="password" id="admin-password" class="form-control" name="Admin[password]" value="">
            <div class="help-block"></div>
        </div>
    </div>
    <div class="nav-2 lab">
        <div class="form-group field-admin-password required has-success">
            <label class="control-label" for="admin-password">确认密码</label>
            <input type="password" id="admin-password" class="form-control" name="password2" value="">
            <div class="help-block"></div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
