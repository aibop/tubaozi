<?php
/* @var $this yii\web\View */
use kartik\tree\TreeView;
use backend\modules\product\models\Product;

echo TreeView::widget([
    'query' => Product::find()->addOrderBy('root,lft'),
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,
    'isAdmin' => false,
    'displayValue' => 1,
    'softDelete' => true,       // 默认为 true
    'cacheSettings' => [
        'enableCache' => true   // 默认为 true
    ]
]);

echo \kartik\tree\TreeViewInput::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => Product::find()->addOrderBy('root, lft'),
    'headingOptions'=>['label'=>'Categories'],
    'name' => 'kv-product', // input name
    'value' => '1,2,3',     // values selected (comma separated for multiple select)
    'asDropdown' => true,   // will render the tree input widget as a dropdown.
    'multiple' => true,     // set to false if you do not need multiple selection
    'fontAwesome' => true,  // render font awesome icons
    'rootOptions' => [
        'label'=>'<i class="fa fa-tree"></i>',  // custom root label
        'class'=>'text-success'
    ],
    //'options'=>['disabled' => true],
]);
?>
