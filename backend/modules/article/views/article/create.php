<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Article $model
 */

$this->title = '添加文章';
$this->params['breadcrumbs'][] = ['label' => '会员文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
