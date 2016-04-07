<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\modules\article\models\ArticleSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="article-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'intro') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'viewed') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
