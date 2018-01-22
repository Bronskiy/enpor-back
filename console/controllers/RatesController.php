<?php

namespace console\controllers;

use common\components\RatesHelper;
use Yii;
use yii\console\Controller;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class RatesController extends Controller
{

    public function actionUpdate()
    {
        RatesHelper::updateRates();
    }

}
