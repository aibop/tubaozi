<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016/3/11
 * Time: 23:50
 */
return [
    'product' =>[
        'class' => 'backend\modules\product\Module'
    ],
    'category' =>[
        'class' => 'backend\modules\category\Module'
    ],
    'user' =>[
        'class' => 'backend\modules\user\Module'
    ],
    'article' =>[
        'class' => 'backend\modules\article\Module'
    ],
//    'master' => [
//        'class' => 'backend\modules\rbac\Module',
//        'layout' => 'left-menu',
//        'controllerMap' => [
//            'assignment' => [
//                'class' => 'backend\modules\rbac\controllers\AssignmentController',
//                'userClassName' => 'common\models\user\User',
//                'idField' => 'id'
//            ]
//        ],
//        'menus' => [
//            'assignment' => [
//                'label' => '权限分配' // change label
//            ],
//            //'route' => null, // disable menu
//        ],
//    ],

    // yii2-kartikgii : http://www.yiiframework.com/extension/yii2-kartikgii/
    'gridview' => [
        'class' => 'kartik\grid\Module',
    ],

    'datecontrol' =>  [
        'class' => 'kartik\datecontrol\Module',

        // format settings for displaying each date attribute
        'displaySettings' => [
            'date' => 'd-m-Y',
            'time' => 'H:i:s A',
            'datetime' => 'd-m-Y H:i:s A',
        ],

        // format settings for saving each date attribute
        'saveSettings' => [
            'date' => 'Y-m-d',
            'time' => 'H:i:s',
            'datetime' => 'Y-m-d H:i:s',
        ],

        // automatically use kartik\widgets for each of the above formats
        'autoWidget' => true,

    ],
    'admin' => [
        'class' => 'mdm\admin\Module',
        'layout' => 'left-menu',//yii2-admin的导航菜单
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
                'userClassName' => 'backend\models\BackendUser',
                'idField' => 'id'
            ]
        ],
//        'menus' => [
//            'assignment' => [
//                'label' => 'Grand Access' // change label
//            ],
//            //'route' => null, // disable menu route
//        ]
    ],
    'debug' => [
        'class' => 'yii\debug\Module',
    ],

//    'redactor' => [
//        'class' => 'yii\redactor\RedactorModule',
//        'uploadDir' => '@webroot/path/to/uploadfolder',
//        'uploadUrl' => '@web/path/to/uploadfolder',
//        'imageAllowExtensions'=>['jpg','png','gif']
//    ],

//    'filemanager' => [
//        'class'         => 'linchpinstudios\filemanager\Module',
//        'thumbnails'    => [[100,100]],                                              // Optional: array
//        'path'          => '/images/uploads/',                                       // Default relative to your web directory or AWS
//        'thumbPath'     => '/images/uploads/thumb/',                                 // Default relative to your web directory or AWS
//        'url'           => '/',                                                      // either s3 buket URL or CloudFront (can be changed)
//        'aws'           => [
//            'enable'        => true,
//            'key'           => 'YOURAWS_KEY',
//            'secret'        => 'YOURAWS_SECRET',
//            'bucket'        => 'your-bucket',
//        ],
//    ],
    'treemanager' =>  [
        'class' => '\kartik\tree\Module',
        // other module settings, refer detailed documentation
//        'treeViewSettings'=> [
//            'nodeView' => '@backend/modules/system/views/app-menu/_treeForm'
//        ],
        'treeStructure' => [
            'treeAttribute' => 'root',
            'leftAttribute' => 'lft',
            'rightAttribute' => 'rgt',
            'depthAttribute' => 'lvl',
        ],
        'dataStructure' =>[
            'keyAttribute' => 'id',
            'nameAttribute' => 'name',
            'iconAttribute' => 'icon',
            'iconTypeAttribute' => 'icon_type'
        ],
        'treeViewSettings'=> [
            'nodeView' => '@kvtree/views/_form'
        ]
    ],
    'rbac' => [
        'class' => 'backend\modules\rbac\Module',
    ],
];