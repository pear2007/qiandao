<?php
return [

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
        'language' => 'zh-CN',
    //    'language' => 'en',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
	'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                    ],
					],
				],
        ],

        'urlManager' => [

            'enablePrettyUrl' => true,
//     'enableStrictParsing' => false,
            'showScriptName' => false,   //false
            'rules' => [
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>.html'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
            ],
        ],

    ],


];
