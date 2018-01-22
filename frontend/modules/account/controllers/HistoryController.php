<?php

namespace frontend\modules\account\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class HistoryController extends Controller
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
        return $this->render('index');
    }
}
