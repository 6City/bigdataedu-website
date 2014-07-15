<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'bigdataedu',
	'defaultController' =>  'site',
	// preloading 'log' component
	'preload'=>array('log'),

	'layout' => 'main',
		
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/* 'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		), */
	/*
		'admins',
	*/
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName' => false,					
			'rules'=>array(
				'<action:technology>' => 'event/<action>',
				'<action:salon>' => 'event/<action>',
				'<action:openclass>' => 'event/<action>',
				'<action:book>' => 'event/<action>',
				'<action:talk>' => 'event/<action>',
				'<action:article>' => 'article/<action>',
				'<action:train1>' => 'article/<action>',
				'<action:train2>' => 'article/<action>',
				'<action:train3>' => 'article/<action>',
				'<action:train4>' => 'article/<action>',
				'<action:buydata>' => 'article/<action>',
				'<action:selldata>' => 'article/<action>',
				'<action:consultation>' => 'article/<action>',
				'<action:osoft>' => 'article/<action>',
				'<action:bsoft>' => 'article/<action>',
				'<action:bbs>' => 'article/<action>',
				'<action:partners>' => 'article/<action>',
				'<action:teacher>' => 'article/<action>',
				'<action:case>' => 'article/<action>',
				
				'<action:home>' => 'site/<action>',
				'<action:event>' => 'event/home',
				'<action:community>' => 'article/<action>',
				'<action:train>' => 'article/<action>',
				'<action:data>' => 'article/<action>',
				'<action:soft>' => 'article/<action>',
				'<action:collect>' => 'article/<action>',
				
				'<action:edit>' => 'site/<action>',
				'<action:editor>' => 'site/<action>',
				
				'<action:history>' => 'article/<action>',
				
				'<action:reg>' => 'user/<action>',
				'<action:email>' => 'user/<action>',
				
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

				'<action:service>' => 'site/<action>',
				
				// test
				'<action:main1>' => 'site/<action>',
			),
		),
		/**/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/blog.db',
		),/**/
		// uncomment the following to use a MySQL database
		
//		'db'=>array(
//			'connectionString' => 'mysql:host=113.11.199.170;dbname=register',
////			'emulatePrepare' => true,
//			'username' => 'admin',
//			'password' => '223238',
//			'charset' => 'utf8',
//		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning, info, trace',
// 					'categories'=>'system.*',
				),
				// uncomment the following to show log messages on web pages
// 				array(
// 					'class'=>'CWebLogRoute',
// 					'levels'=>'info',
// 					'categories'=>'system.*',
// 				),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
//	'params'=>array(
		// this is used in contact page
//		'adminEmail'=>'webmaster@example.com',
//	),
// 	'session' => array(
// 			'autoStart'=>true,
// 	),
);