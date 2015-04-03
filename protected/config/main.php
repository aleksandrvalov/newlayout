<?php


return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'aritex_api',
    'preload'=>array('log'),
    
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.controllers.*',
    ),//import
    
    'components'=>array(
	'errorHandler'=>array(
            'errorAction'=>'api/getRequestError',
        ),//error handler
        'urlManager'=>array(
            'class'=>'application.components.UrlManager',
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                '<action:\w+>'=>'api/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                //'<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',	
            ),//rules
        ),//urlmanager

        
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
            ),
        ),//log        
    ),//components

    'params'=>array(
        'user_id'=>NULL,
    ),//params
	
);