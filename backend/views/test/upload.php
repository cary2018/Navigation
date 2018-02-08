<?php
use yii\widgets\ActiveForm;
$this->title = '批量导入';
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles')->fileInput() ?>
<img src="/uploads/0c17c12c1c746df9f34a02f54c275cac.jpg" />
    <button>Submit</button>

<?php ActiveForm::end() ?>

