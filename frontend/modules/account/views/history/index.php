<?php

use yii\helpers\Html;


$this->title = Yii::t('frontend', 'Transaction history');

$this->params['breadcrumbs'][0] = ['label' => $this->title];
?>

<div class="box">
    <div class="box-inner">
        <div class="box-title">
            <h2>
                Transaction history
            </h2>
        </div>
        <div class="table-wrapper">
            <table class="table">
                <tr>
                    <th class="min-width">Date</th>
                    <th class="min-width">Description</th>
                    <th class="min-width center">Status</th>
                    <th class="min-width center">Tokens</th>
                    <th class="min-width"></th>
                </tr>
                <tr>
                    <td class="min-width">01 Sep 2017</td>
                    <td class="min-width">
                        Acquired 10.00 EPR for 10.00 USD</td>
                    <td class="min-width center status">
                        <i class="fa fa-check"></i>
                    </td>
                    <td class="min-width center"> + 10 EPR</td>
                    <td class="min-width"></td>
                </tr><tr>
                    <td class="min-width">01 Sep 2017</td>
                    <td class="min-width">
                        Acquired 15.00 EPR for 15.00 USD</td>
                    <td class="min-width center status">
                        <i class="fa fa-times"></i>
                    </td>
                    <td class="min-width center"> </td>
                    <td class="min-width"></td>
                </tr>
            </table>
        </div>
    </div>
</div>