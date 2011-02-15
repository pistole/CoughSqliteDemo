<?php
define('CONFIG_PATH', dirname(__FILE__) . '/');
define('APP_PATH', dirname(CONFIG_PATH) . '/');
include(APP_PATH . 'modules/coughphp-1.4/load.inc.php');
include(APP_PATH . 'modules/coughphp-1.4/extras/Autoloader.class.php');
Autoloader::setCacheFilePath(APP_PATH . 'tmp/class_path_cache.txt');
Autoloader::excludeFolderNamesMatchingRegex('/^CVS|\..*$/');
Autoloader::setClassPaths(array(
	APP_PATH . 'classes/',
	APP_PATH . 'models/',
));
spl_autoload_register(array('Autoloader', 'loadClass'));

// Setup database config
$dbConfig = array(
	'adapter' => 'as',
	'host' => '',
	'port' => '',
	'driver' => 'sqlite',
	'path' => APP_PATH . '/test.db',
	'db_name_hash' => array('main' => 'main'),
);

CoughDatabaseFactory::addConfig($dbConfig);
