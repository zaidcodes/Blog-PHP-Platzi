<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']); 
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL',$baseUrl);

$route = $_GET['route'] ?? '/';

//Starting Database
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'blog-php-platzi',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_bin',
    'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();

$router->controller('/', app\controllers\IndexController::class);
$router->controller('/admin', app\controllers\admin\IndexController::class);
$router->controller('/admin/posts', app\controllers\admin\PostController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;

