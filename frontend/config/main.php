<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'urlManager'=>[ //定制路由
            'enablePrettyUrl' => true,  //设置URL不转义 // Disable r= routes
            'showScriptName' => false,  //设置URL的 // Disable 隱藏　index.php
            //'suffix'         => '.html', //设置后缀
            'rules'=>[
                '/'=> 'site/index',
                'about'=> 'site/about',
                'forum' => 'site/forum',
                'contact'=> 'contact/index',
                'shop/'=> 'goods/index',
                'category' => 'category/index',
                'jiukj' => 'category/jiukj',
                'ershi' => 'category/ershi',
                'search' => 'category/search',
            ]
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'password' => 'cary',
            'port' => 6379,
            'database' => 0,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'language' => 'zh-CN',
    'params' => $params,
];
