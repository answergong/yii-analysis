<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class TestController extends Controller
{


    public function actions()
    {
        return [
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                    "imageUrlPrefix" => "http://www.baidu.com",//图片访问路径前缀
                    "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}",//上传保存路径
                    "imageRoot" => Yii::getAlias("@webroot/gxz"),
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $as = 1;
//        var_dump(Yii::getAlias('@web'));die;
        if (Yii::$app->request->post()) {
            var_dump(Yii::$app->request->post());
        } else {
            $model = new SignupForm();
            return $this->render('index', [
                'model' => $model
            ]);
        }

    }

    /**
     * 百度富文本编辑器
     *
     * @author   gongxiangzhu
     * @dateTime 2019/1/7 16:07
     *
     * @param  integer $id
     * @param  string  $name
     *
     * @return mixed
     */
    public function actionEditor()
    {
        if (Yii::$app->request->post()) {
            var_dump(Yii::$app->request->post());
        } else {
            $model = new SignupForm();
            return $this->render('editor', [
                'model' => $model
            ]);
        }
    }


}
