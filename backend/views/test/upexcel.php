<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Admin;

$this->title = '批量导入';
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'filename')->fileInput() ?>
<?
$countries=Admin::find()->all();
$listData=ArrayHelper::map($countries,'id','username');
echo $form->field($model, 'cat_id')->dropDownList($listData, ['prompt'=>'请选择','style'=>'width:120px']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>