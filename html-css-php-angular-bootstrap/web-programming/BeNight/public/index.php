<?php

/**
 * MINI - an extremely simple naked PHP application
 *
 * @package mini
 * @author Panique
 * @link http://www.php-mini.com
 * @link https://github.com/panique/mini/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// TODO get rid of this and work with namespaces + composer's autoloader

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

define('MODELS_PATH', APP . 'models/');
define('VIEWS_PATH', APP .'views/');

// load application config (error reporting etc.)
require APP . '/config/config.php';

// Loading Libriries neded
require APP . '/libs/session.php';
require APP . '/libs/database.php';
require APP . '/libs/view.php';

// FOR DEVELOPMENT: this loads PDO-debug, a simple function that shows the SQL query (when using PDO).
// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug
require APP . '/libs/pdo-debug.php';

// load application class
require APP . '/core/application.php';
require APP . '/core/controller.php';

//load Upload class
require APP . 'libs/vendor/autoload.php';

// start the application
$app = new Application();
