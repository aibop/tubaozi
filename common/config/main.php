<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' =>'zh-CN',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'common*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                        'common/user' => 'user.php',
                    ],
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@backend/messages',
                    'fileMap' => [
                        'rbac-admin' => 'rbac-admin',
                        'backend' => 'backend.php',
                        'backend/section' => 'section.php',
                        'backend/comment' => 'comment.php',
                        'backend/user' => 'user.php',
                    ],
                ],
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    'fileMap' => [
                        'frontend' => 'frontend.php',
                        'frontend/section' => 'section.php',
                        'frontend/comment' => 'comment.php',
                    ],
                ],
                'api*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@api/messages',
                    'fileMap' => [
                        'api' => 'api.php',
                        'api/section' => 'section.php',
                        'api/comment' => 'comment.php',
                    ],
                ],
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                ],
            ],
        ],
    ],

];
