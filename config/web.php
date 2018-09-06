<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin',
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'uploads/store', //path to origin images
            'imagesCachePath' => 'uploads/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/uploads/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'n3_pApAZavAloZ0wSSdRd3hTf4JuUQz7',
            'baseUrl' => ''
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
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => ['admin@r' => 'remontecodom.ru'],
            ],
            'transport' => [
                'class' => 'Swift_MailTransport',
            ],
            'useFileTransport' => false,
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'moscow' =>  'auth/login',
                'page/<alias:[a-zA-Z0-9\-_]*>' => 'pages/index/',
                '<id:([0-9])+>/images/image-by-item-and-alias' => 'yii2images/images/image-by-item-and-alias',
                'images/image-by-item-and-alias' => 'yii2images/images/image-by-item-and-alias',
            ],
        ],

    ],
    'params' => $params,
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
//            'access' => [
//
//                   '@'
//            ],

            'root' => [
                'path' => 'upload/global',
                'name' => 'Global'
            ],
//            'watermark' => [
//                'source'         => __DIR__.'/logo.png', // Path to Water mark image
//                'marginRight'    => 5,          // Margin right pixel
//                'marginBottom'   => 5,          // Margin bottom pixel
//                'quality'        => 95,         // JPEG image save quality
//                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
//                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
//                'targetMinPixel' => 200         // Target image minimum pixel size
//            ]
        ]
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
