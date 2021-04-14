<?php

//$params = array_merge(
//    require(__DIR__ . '/../../common/config/params.php'),
//    require(__DIR__ . '/../../common/config/params-local.php'),
//    require(__DIR__ . '/params.php'),
//    require(__DIR__ . '/params-local.php')
//);
//
//return [
//    'id' => 'app-api',
//    'basePath' => dirname(__DIR__),
//    'bootstrap' => ['log'],
//    'modules' => [
//        'v1' => [
//            'basePath' => '@app/modules/v1',
//            'class' => 'api\modules\v1\Module'
//        ]
//    ],
//    'components' => [
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => false,
//        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
//            ],
//        ],
//        'urlManager' => [
//            'enablePrettyUrl' => true,
//            'enableStrictParsing' => true,
//            'showScriptName' => false,
////            'rules' => [
////                'v1/site/' => 'v1/site/index'
////            ],
//            'rules' => [
//                [
//                    'class' => \yii\rest\UrlRule::class,
//                    'controller' => ['v1/country'],
//                    'prefix' => 'api', //api будет доступен по url, начинающимся с /api/
//                    'extraPatterns' => [
//                        'GET /' => 'index',
//                    ],
//                ],
//        ]
//    ],
//    'params' => $params,
//        ]
//];

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controller',
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => \api\modules\v1\Module::class
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'docs' => 'site/docs',
                'json-schema' => 'site/json-schema'
            ],
        ]
    ],
    'params' => $params,
];



