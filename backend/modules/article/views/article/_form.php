<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Article $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'user_id'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter User ID...']],

            'viewed'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Viewed...']],

            'create_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Create At...']],

            'update_at'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Update At...']],

            'title'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Title...', 'maxlength'=>128]],

            'content'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Content...','rows'=> 6]],

            'author'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Author...', 'maxlength'=>128]],

            'intro'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Intro...', 'maxlength'=>255]],

            'picture'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Picture...', 'maxlength'=>255]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', '新增') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>
