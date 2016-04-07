<?php
/**
 * Created by PhpStorm.
 * User: AndySong
 * Date: 2015-12-10
 * Time: 16:33
 */


use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/*NavBar::begin([
    'brandLabel' => 'My Company',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
    ['label' => 'About', 'url' => ['/site/about']],
    ['label' => 'Contact', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/user/register/account']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/sso/login']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/sso/logout'],
        'linkOptions' => ['data-method' => 'post']
    ];
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();*/
?>
<div class="row border-bottom">
    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">

        <div class="navbar-header">
            <a class=" minimalize-styl-2 btn btn-primary " href="<?=Yii::$app->urlManager->createUrl(['site/index']) ?>">I3A运营后台 </a>
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0)"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="搜索..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message"><?= date('Y-m-d') ?></span>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="/user/my/profile">
                    <i class="fa fa-bell"></i>  个人中心
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="/user/my/password">
                            <i class="fa fa-lock"></i> 修改密码
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= Yii::$app->urlManager->createUrl('site/logout'); ?>">
                    <i class="fa fa-sign-out"></i> 退出
                </a>
            </li>
        </ul>

    </nav>
</div>

