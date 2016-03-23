<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\modules\user\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'username'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Username...', 'maxlength'=>60]],

            'password'=>['type'=> Form::INPUT_PASSWORD, 'options'=>['placeholder'=>'Enter Password...', 'maxlength'=>60]],

            'allowance'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Allowance...']],

            'allowance_updated_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Allowance Updated At...']],

            'created_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Created At...']],

            'updated_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Updated At...']],

            'logged_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Logged At...']],

            'status'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Status...']],

            'access_token'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Access Token...', 'maxlength'=>60]],

            'mobile'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Mobile...', 'maxlength'=>11]],

            'password_hash'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Password Hash...', 'maxlength'=>255]],

            'auth_key'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Auth Key...', 'maxlength'=>255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', '新增') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>
