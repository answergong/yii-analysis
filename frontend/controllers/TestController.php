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
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        var_dump(Yii::$container);
        $testObject = Yii::createObject([
            'class'=>"frontend\components\Test",
            'name'=>'new test name'
        ],[20]);
        print_r($testObject);die;
        echo 1;die;
//        return $this->render('index');
    }

}
