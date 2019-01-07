<?php

use yii\helpers\Html;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ueditor</title>
</head>
<body>
<?=Html::beginForm('','post',['id'=>'form','class'=>'form','data'=>'myself']);?>
<?= \yii\redactor\widgets\Redactor::widget([ 'model' => $model, 'attribute' => 'content' ]) ?>
<?=Html::submitButton('提交按钮',['class'=>'btn btn-primary']);?>

</body>
</html>