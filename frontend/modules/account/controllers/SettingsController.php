<?php

namespace frontend\modules\account\controllers;

use common\base\MultiModel;
use frontend\modules\account\models\AccountForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class SettingsController extends Controller
{



    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    public function beforeAction($action)
    {
        $this->layout = '@app/views/layouts/account-admin.php';
        return parent::beforeAction($action);
    }


    public function actionIndex()
    {
        $accountForm = new AccountForm();
        $accountForm->setUser(Yii::$app->user->identity);

        $model = new MultiModel([
            'models' => [
                'account' => $accountForm,
                'profile' => Yii::$app->user->identity->userProfile
            ]
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $locale = $model->getModel('profile')->locale;
            Yii::$app->session->setFlash('forceUpdateLocale');
            Yii::$app->session->setFlash('alert', [
                'options' => ['class'=>'alert-success'],
                'body' => Yii::t('frontend', 'Your account has been successfully saved', [], $locale)
            ]);
            return $this->refresh();
        }
        return $this->render('index', ['model'=>$model]);
    }
}
