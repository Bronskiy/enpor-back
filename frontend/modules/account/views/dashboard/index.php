<?php

use trntv\filekit\widget\Upload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\base\MultiModel */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('frontend', 'Dashboard');

$this->params['breadcrumbs'][0] = ['label' => $this->title];
?>

<div class="row equal-height-row">
    <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box white-box-shadow">
            <h3 class="box-title">Account Balance</h3>
            <div class="row">
                <div class="">
                    <img src="/img/enpor-logo-small.png" style="margin: 20px auto;display: block;">
                    <p style="color: #2b2b2b;font-family: Poppins, sans-serif;margin: 10px 0;font-weight: 300;text-align:center;">
                        <span style="font-size:36px;" class="counter">2910</span><span class="text-muted"> Tokens</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6">
        <div class="white-box white-box-shadow exchange-rates">
            <h3 class="box-title">Exchange Rates (1 EPR)</h3>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h4><i class="fa fa-usd"></i> USD</h4>
                </div>
                <div class="col-md-1 col-sm-1 text-center">
                    <h4>=</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4><span class="counter"><?= Yii::$app->keyStorage->get('usdExchangeRate') ?></span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h4><i class="cc-BTC-alt"></i> BTC</h4>
                </div>
                <div class="col-md-1 col-sm-1 text-center">
                    <h4>=</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4><span class="counter"><?= $rates['btc'] ?></span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h4><i class="cc-ETH"></i> ETH</h4>
                </div>
                <div class="col-md-1 col-sm-1 text-center">
                    <h4>=</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4><span class="counter"><?= $rates['eth'] ?></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h4><i class="cc-LTC-alt"></i> LTC</h4>
                </div>
                <div class="col-md-1 col-sm-1 text-center">
                    <h4>=</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4><span class="counter"><?= $rates['ltc'] ?></span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <h4><i class="cc-DASH-alt"></i> DASH</h4>
                </div>
                <div class="col-md-1 col-sm-1 text-center">
                    <h4>=</h4>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h4><span class="counter"><?= $rates['dash'] ?></span></h4>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6">

        <div class="white-box white-box-shadow">
            <h3 class="box-title">Total Invested</h3>
            <div class="row">

                <div class="col-xs-12">
                    <i class="icon-user"></i> 26813
                    <h2><i class="ti-arrow-up text-success"></i> 1064</h2>
                    <div id="sparklinedash">
                        <canvas style="display: inline-block; width: 144px; height: 30px; vertical-align: top;"
                                width="144" height="30"></canvas>
                    </div>

                    <div class="text-muted m-t-20"><i class="icon-user"></i> 26813</div>
                    <h2>$ <span class="counter">35,433,639</span> USD</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6">

        <div class="white-box white-box-shadow bonus-box">
            <h3 class="box-title">Current Bonus</h3>
            <div class="row">
                <div data-label="60%" class="css-bar css-bar-60 css-bar-lg m-b-0 css-bar-info"></div>
            </div>
            <div class="row" id="bonus-clock">
                <div class="col-md-4 col-sm-4 text-center">
                    <p class="text-gold">hours</p>
                    <h1>07</h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <p class="text-gold">mins</p>
                    <h1>38</h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <p class="text-gold">secs</p>
                    <h1>37</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box white-box-shadow">
            <h3 class="box-title">Current Status</h3>
            <section class="cd-horizontal-timeline">
                <div class="timeline-h">
                    <div class="events-wrapper">
                        <div class="events">
                            <ol>
                                <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                            </ol>

                            <span class="filling-line" aria-hidden="true"></span>
                        </div> <!-- .events -->
                    </div> <!-- .events-wrapper -->

                    <ul class="cd-timeline-navigation">
                        <li><a href="#0" class="prev inactive">Prev</a></li>
                        <li><a href="#0" class="next">Next</a></li>
                    </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->

                <div class="events-content">
                    <ol>
                        <li class="selected" data-date="16/01/2014">
                            <h2>Event title here</h2>
                            <em>January 16th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="28/02/2014">
                            <h2>Event title here</h2>
                            <em>February 28th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="20/04/2014">
                            <h2>Event title here</h2>
                            <em>March 20th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="20/05/2014">
                            <h2>Event title here</h2>
                            <em>May 20th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="09/07/2014">
                            <h2>Event title here</h2>
                            <em>July 9th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="30/08/2014">
                            <h2>Event title here</h2>
                            <em>August 30th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="15/09/2014">
                            <h2>Event title here</h2>
                            <em>September 15th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="01/11/2014">
                            <h2>Event title here</h2>
                            <em>November 1st, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="10/12/2014">
                            <h2>Event title here</h2>
                            <em>December 10th, 2017</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="19/01/2015">
                            <h2>Event title here</h2>
                            <em>January 19th, 2015</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>

                        <li data-date="03/03/2015">
                            <h2>Event title here</h2>
                            <em>March 3rd, 2015</em>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia,
                                fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic
                                repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi
                                reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                temporibus dolores porro doloribus.
                            </p>
                        </li>
                    </ol>
                </div> <!-- .events-content -->
            </section>
        </div>
    </div>
</div>
<!-- .row -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box white-box-shadow">
            <div class="row row-in">
                <div class="col-md-3 col-xs-12 col-sm-6 row-in-br"><img class="img-responsive" alt="user"
                                                                        style="margin: 0 auto;" src="/img/Qr-2.png">
                    <div class="white-box">
                        <h3 class="box-title">Contribute with Bitcoins</h3>
                        <div class="text-muted"><span class="m-r-10">Minimum payment 0.01 BTC</span></div>
                        <p>1278sakgaskdfalweftw236fewduxkdh397</p>
                        <button class="btn btn-default btn-rounded waves-effect waves-light m-t-20">Copy address
                        </button>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 row-in-br"><img class="img-responsive" alt="user"
                                                                        style="margin: 0 auto;" src="/img/Qr-2.png">
                    <div class="white-box">
                        <h3 class="box-title">Contribute with Ethereum</h3>
                        <div class="text-muted"><span class="m-r-10">Minimum payment 0.01 BTC</span></div>
                        <p>1278sakgaskdfalweftw236fewduxkdh397</p>
                        <button class="btn btn-default btn-rounded waves-effect waves-light m-t-20">Copy address
                        </button>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 row-in-br"><img class="img-responsive" alt="user"
                                                                        style="margin: 0 auto;" src="/img/Qr-2.png">
                    <div class="white-box">
                        <h3 class="box-title">Contribute with Litecoin</h3>
                        <div class="text-muted"><span class="m-r-10">Minimum payment 0.01 BTC</span></div>
                        <p>1278sakgaskdfalweftw236fewduxkdh397</p>
                        <button class="btn btn-default btn-rounded waves-effect waves-light m-t-20">Copy address
                        </button>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 row-in-br  b-r-none"><img class="img-responsive" alt="user"
                                                                                  style="margin: 0 auto;"
                                                                                  src="/img/Qr-2.png">
                    <div class="white-box">
                        <h3 class="box-title">Contribute with Dash</h3>
                        <div class="text-muted"><span class="m-r-10">Minimum payment 0.01 BTC</span></div>
                        <p>1278sakgaskdfalweftw236fewduxkdh397</p>
                        <button class="btn btn-default btn-rounded waves-effect waves-light m-t-20">Copy address
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.row -->
<!-- /.row -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box white-box-shadow">
            <div class="row row-in">
                <div class="col-lg-4 col-sm-6 row-in-br">
                    <div class="col-in row">
                        <div class="col-md-12">
                            <h3 class="box-title">Referral Statistics:</h3>
                            <p>EPR Tokens credited to your account: 213 EPR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 row-in-br  b-r-none">
                    <div class="col-in row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <h3 class="box-title">Referral Link:</h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="ref-link">http://enpor.iconicline.com/r/yBGVCEjx</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--row -->
<!-- .row -->
<div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="white-box white-box-shadow">
            <h3 class="box-title">Total Investors</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h2 class="counter">219</h2>
                </div>
            </div>
            <div id="sparkline8"></div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="white-box white-box-shadow">
            <h3 class="box-title">Total Amount invested</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h2>$<span class="counter">21.291</span></h2>
                </div>
            </div>
            <div id="sparkline9"></div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="white-box white-box-shadow">
            <h3 class="box-title">Total Tokens Issued</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h2><span class="counter">23.321</span> EPR</h2>
                </div>
            </div>
            <div id="sparkline10"></div>
        </div>
    </div>
</div>
