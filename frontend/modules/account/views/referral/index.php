<?php

use yii\helpers\Html;
use Yii;
use yii\helpers\Url;

$this->title = Yii::t('frontend', 'Referral stats');

$this->params['breadcrumbs'][0] = ['label' => $this->title];
?>


<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <div class="box-inner">
                <div class="box-title">
                    <h2>
                        Referral Link
                    </h2>
                </div>
                <div class="ref-link"><?= Yii::$app->homeUrl;?>/r/<?= Yii::$app->user->identity->getReferralCode();?></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="box">
            <div class="box-inner">
                <div class="box-title">
                    <h2>
                        Referral stats
                    </h2>
                </div>
                <div class="overview">
                    <ul>
                        <li>
                            <strong>Total link clicks</strong>
                            <span><?= Html::a($refLinkClicks, Url::toRoute('referral/clicks')) ?></span>
                        </li>
                        <li>
                            <strong>Total investors</strong>
                            <span><?= Html::a($refRegistrations, Url::toRoute('referral/registrations')) ?></span>
                        </li>
                        <li>
                            <strong>Total amount invested</strong>
                            <span>1 234$</span>
                        </li>
                        <li>
                            <strong>Total tokens issued</strong>
                            <span>1 234 EPR</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-wrapper">
    <table class="table">
        <tr>
            <th class="min-width">Date</th>
            <th class="min-width">User</th>
            <th class="min-width center">Summ</th>
            <th class="min-width center">Tokens</th>
            <th class="min-width"></th>
        </tr>
        <tr>
            <td class="min-width">01 Sep 2017</td>
            <td class="min-width">
                User01</td>
            <td class="min-width center">
                0.0010 BTC
            </td>
            <td class="min-width center"> + 10 EPR</td>
            <td class="min-width"></td>
        </tr>
        <tr>
            <td class="min-width">31 Aug 2017</td>
            <td class="min-width">
                User02</td>
            <td class="min-width center">
                0.1 ETH
            </td>
            <td class="min-width center"> + 1 000 EPR</td>
            <td class="min-width"></td>
        </tr>
        <tr>
            <td class="min-width">30 Aug 2017</td>
            <td class="min-width">
                User01</td>
            <td class="min-width center">
                0.0010 LTC
            </td>
            <td class="min-width center"> + 10 EPR</td>
            <td class="min-width"></td>
        </tr>
        <tr>
            <td class="min-width">30 Aug 2017</td>
            <td class="min-width">
                User02</td>
            <td class="min-width center">
                0.1 DASH
            </td>
            <td class="min-width center"> + 1 000 EPR</td>
            <td class="min-width"></td>
        </tr>
        <tr>
            <td class="min-width">29 Aug 2017</td>
            <td class="min-width">
                User01</td>
            <td class="min-width center">
                0.0010 BTC
            </td>
            <td class="min-width center"> + 10 EPR</td>
            <td class="min-width"></td>
        </tr>
        <tr>
            <td class="min-width">28 Aug 2017</td>
            <td class="min-width">
                User02</td>
            <td class="min-width center">
                0.1 ETH
            </td>
            <td class="min-width center"> + 1 000 EPR</td>
            <td class="min-width"></td>
        </tr>
    </table>
</div>
