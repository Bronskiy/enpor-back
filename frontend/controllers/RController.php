<?php

namespace frontend\controllers;

use common\models\UserProfile;
use Yii;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\Cookie;
use common\models\ReferralClicks;

class RController extends Controller
{

    public function beforeAction($action)
    {
        $this->layout = '@app/views/layouts/account-admin.php';
        return parent::beforeAction($action);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        return $this->goHome();
    }

    public function actionView($refCode)
    {

        if (!isset(Yii::$app->request->cookies['enpor_referral_code'])) {

            $user = UserProfile::find()->where(['ref_code' => $refCode])->one();

            if ($user) {

                $model = new ReferralClicks();
                $model->user_id = $user->user_id;
                $model->ip = new Expression('INET_ATON(:ip)',['ip' => Yii::$app->request->userIP]);
                $model->save();

                $cookie = new Cookie([
                    'name' => 'enpor_referral_code',
                    'value' => $refCode,
                    'expire' => time() + 86400 * 365,
                ]);
                Yii::$app->getResponse()->getCookies()->add($cookie);
            }


        }

        return $this->goHome();
    }
}
