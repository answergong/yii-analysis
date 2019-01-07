<?php

use kucha\ueditor\UEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'action' => ['editor']
]);
echo $form->field($model, 'content')->widget('kucha\ueditor\UEditor', []);

//echo UEditor::widget([
//    'clientOptions' => [
//        //编辑区域大小
//        'initialFrameHeight' => '200',
//        //设置语言
//        'lang' =>'en', //中文为 zh-cn
//        //定制菜单
//        'toolbars' => [
//            [
//                'fullscreen', 'source', 'undo', 'redo', '|',
//                'fontsize',
//                'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat',
//                'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|',
//                'forecolor', 'backcolor', '|',
//                'lineheight', '|',
//                'indent', '|'
//            ],
//        ]
//        ]
//    ]);
echo Html::submitButton('Login', ['class' => 'btn btn-primary']);
ActiveForm::end()
?>
