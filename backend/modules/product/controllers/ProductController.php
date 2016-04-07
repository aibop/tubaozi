<?php

namespace backend\modules\product\controllers;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }



}
