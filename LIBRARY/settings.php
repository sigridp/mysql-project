<?php
/*** opstarten sessie ***/
if(!session_id()) {
	session_start();
}

/*** server instellingen ***/
switch ($_SERVER['SERVER_NAME']) {
	case 'dev.opdracht13.nl':
		//thuis-omgeving
        define('DOCUMENT_ROOT',	$_SERVER['DOCUMENT_ROOT']	);
        define('WEB_URL',	    '//' .	$_SERVER['HTTP_HOST']	);
		define('DB_HOST',       'localhost');
		define('DB_USER',       'root');
		define('DB_PASS',       'root');
        define('DB_NAME',       'cmm_nieuwsberichten');

        ini_set('error.reporting', E_ALL);
        ini_set('display_errors', 1);
        break;
    default:
    	//exceptionele config voor leraar
    	define('WEB_URL',	    'http://cmm-students.localhost/Sigrid/homework/13-php-mysql-project/result/public_html/'	);
    	define('DOCUMENT_ROOT',	'/Volumes/Web/cmm-students/www/Sigrid/homework/13-php-mysql-project/result/public_html'	);
        define('DB_HOST',       'localhost');
		define('DB_USER',       'root');
		define('DB_PASS',       'root');
        define('DB_NAME',       'cmm_news');

        ini_set('error.reporting', E_ALL);
        ini_set('display_errors', 1);
}

/*** settings path-redirectories ***/
define('SITE_ROOT'		,	DOCUMENT_ROOT . '/..'		);
define('IMG_ROOT'		,	DOCUMENT_ROOT . '/images'	);
define('LIB_ROOT'		,	SITE_ROOT . '/Library'		);

/*** setting web-redirectories ***/
define('PAGES_URL'		,	WEB_URL	.	'/pages'			);
define('IMG_URL'		,	WEB_URL . 	'/images'			);
define('CSS_URL'		,	WEB_URL	.	'/css'				);
define('JS_URL'			,	WEB_URL	.	'/js'				);

/** database connectie **/
$mysqliConnection = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);

/*** settings for functions ***/
require_once (LIB_ROOT . '/Includes/functions.php');

