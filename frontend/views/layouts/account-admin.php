<?php

use backend\widgets\Menu;
use yii\widgets\Breadcrumbs;

$this->beginContent('@frontend/views/layouts/_account-admin.php')
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="/">
                        <img class="hidden-xs"src="/img/enpor-logo.png" alt="Enpor" />
                        <img class="visible-xs"src="/img/enpor-logo-small.png" alt="Enpor" />

                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have new messages from support</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="http://via.placeholder.com/128x128" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Support Team</h5>
                                            <span class="mail-desc">You problem has been solved!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                            <? /* <img src="http://via.placeholder.com/128x128" alt="user-img" width="36" class="img-circle"> */ ?>
                            <b><?php echo Yii::$app->user->identity->getPublicIdentity()?></b>
                            <i class="icon-options-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="/account/settings"><i class="ti-user"></i> Profile Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/account/sign-in/logout" data-method="post">Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>
            </div>
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <?php echo Menu::widget([
                    'options' => ['class' => 'nav', 'id' => 'side-menu'],
                    'linkTemplate' => '<a class="waves-effect" href="{url}">{icon}<span>{label}</span>{right-icon}{badge}</a>',
                    'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => Yii::t('backend', 'Dashboard'),
                            'url' => '/account/dashboard',
                            'icon' => '<i class="fa fa-tachometer fa-fw" data-icon="v"></i>',
                            'options' => ['class' => '']
                        ],
                        [
                            'label' => Yii::t('backend', 'Invest'),
                            'url' => '/account/invest',
                            'icon' => '<i class="fa fa-money fa-fw" data-icon="v"></i>',
                            'options' => ['class' => '']
                        ],
                        [
                            'label' => Yii::t('backend', 'Transaction History'),
                            'url' => '/account/history',
                            'icon' => '<i class="fa fa-history fa-fw" data-icon="v"></i>',
                            'options' => ['class' => '']
                        ],
                        [
                            'label' => Yii::t('backend', 'Referral stats'),
                            'url' => '/account/referral',
                            'icon' => '<i class="fa fa-users fa-fw" data-icon="v"></i>',
                            'options' => ['class' => '']
                        ],
                    ]
                ]) ?>
            </div>
        </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= $this->title ?></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <?php echo Breadcrumbs::widget([
                            'homeLink' => ['label' => 'Account', 'url' => '/account/dashboard'],
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php echo $content ?>
            </div>
            <footer class="footer text-center"> 2017 &copy; Enpor ICO Dashboard</footer>
        </div>
    </div>

<?php $this->endContent() ?>