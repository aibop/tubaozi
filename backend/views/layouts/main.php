<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div id="leftnav" class="col-md-2">
        <div class="list-group">
            <!-- 用户管理 -->
            <a class="list-group-item" data-toggle="collapse" href="#categorycollapse" aria-expanded="false" aria-controls="collapseExample">分类管理<span class="caret"></span></a>
            <div class="collapse" id="categorycollapse">
                <div class="well">
                    <div class="list-group">
                        <a href="<?= Url::toRoute(['/category/category/index'])?>" class="list-group-item">分类列表（gii）</a>
                    </div>
                </div>
            </div>
            <!-- 权限管理 -->
            <a class="list-group-item" data-toggle="collapse" href="#resourcecollapse" aria-expanded="false" aria-controls="collapseExample">权限管理<span class="caret"></span></a>
            <div class="collapse" id="resourcecollapse">
                <div class="well">
                    <div class="list-group">
                        <a href="<?= Url::toRoute(['/admin/route'])?>" class="list-group-item">权限管理</a>
                    </div>
                </div>
            </div>
            <!-- 会员管理 -->
            <a class="list-group-item" data-toggle="collapse" href="#usercollapse" aria-expanded="false" aria-controls="collapseExample">会员管理<span class="caret"></span></a>
            <div class="collapse" id="usercollapse">
                <div class="well">
                    <div class="list-group">
                        <a href="<?= Url::toRoute(['/user/user/'])?>" class="list-group-item">会员列表</a>
                        <a href="<?= Url::toRoute(['/article/article/'])?>" class="list-group-item">会员文章</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="page-wrapper" class="gray-bg col-md-10">

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2><?= $this->title ?></h2>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <?= join('', isset($this->params['topButtons']) ? $this->params['topButtons'] : []) ?>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <?= $this->render('_footer') ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
