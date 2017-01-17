<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Uuymxrm_v7OrdW_2mQ6tDEyNrHVds6Ql',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'suffix' => '.php',
            'enableStrictParsing' => false,
            'rules' => [
//                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

                /** Sesion **/
                ['pattern' => '/sesion', 'route' => 'site/login', 'suffix' => '.php'],
                ['pattern' => '/', 'route' => 'site/index', 'suffix' => ''],
                ['pattern' => '/administrador', 'route' => 'site/face', 'suffix' => ''],

                /** Producto **/
                ['pattern' => '/producto','route' => 'producto/index','suffix' => '.php'],
                ['pattern' => '/NuevoProducto','route' => 'producto/create','suffix' => '.php'],
                ['pattern' => '/VerProducto-<id:\d+>','route' => 'producto/view','suffix' => ''],
                ['pattern' => '/ActualizarProducto-<id:\d+>','route' => 'producto/update','suffix' => ''],

                /** Categoria **/
                ['pattern' => '/categoria','route' => 'categoria-producto/index','suffix' => '.php'],
                ['pattern' => '/NuevaCategoria','route' => 'categoria-producto/create','suffix' => '.php'],
                ['pattern' => '/VerCategoria-<id:\d+>','route' => 'categoria-producto/view','suffix' => ''],
                ['pattern' => '/ActualizarCategoria-<id:\d+>','route' => 'categoria-producto/update','suffix' => ''],

                /** Carrusel **/
                ['pattern' => '/carrusel','route' => 'slider/index','suffix' => '.php'],
                ['pattern' => '/NuevoCarrusel','route' => 'slider/create','suffix' => '.php'],
                ['pattern' => '/VerCarrusel-<id:\d+>','route' => 'slider/view','suffix' => ''],
                ['pattern' => '/ActualizarCarrusel-<id:\d+>','route' => 'slider/update','suffix' => ''],

                /** Marca **/
                ['pattern' => '/marca','route' => 'marca/index','suffix' => '.php'],
                ['pattern' => '/NuevaMarca','route' => 'marca/create','suffix' => '.php'],
                ['pattern' => '/VerMarca-<id:\d+>','route' => 'marca/view','suffix' => ''],
                ['pattern' => '/ActualizarMarca-<id:\d+>','route' => 'marca/update','suffix' => ''],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
