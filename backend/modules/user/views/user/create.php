<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\modules\user\models\User $model
 */

$this->title = Yii::t('backend', Yii::t('backend/user','Create User'), [
    'modelClass' => 'User',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', Yii::t('backend/user','Users')), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
