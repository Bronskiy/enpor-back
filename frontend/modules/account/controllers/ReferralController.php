<?php

namespace frontend\modules\account\controllers;

use common\models\ReferralClicks;
use common\models\ReferralRegistrations;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class ReferralController extends Controller
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
        $refLinkClicks = ReferralClicks::find()->where(['user_id' => Yii::$app->user->id])->count();
        $refRegistrations = ReferralRegistrations::find()->where(['ref_parent_id' => Yii::$app->user->id])->count();

        return $this->render('index', [
            'refLinkClicks' => $refLinkClicks,
            'refRegistrations' => $refRegistrations
        ]);
    }

    public function actionClicks()
    {

        $dataProvider = new ActiveDataProvider([
            'query' => ReferralClicks::find()->where(['user_id' => Yii::$app->user->id]),
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('clicks', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionRegistrations()
    {

        $dataProvider = new ActiveDataProvider([
            'query' => ReferralRegistrations::find()->where(['ref_parent_id' => Yii::$app->user->id]),
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('registrations', [
            'dataProvider' => $dataProvider
        ]);
    }
}
