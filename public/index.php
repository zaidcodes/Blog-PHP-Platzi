<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

include_once('../config.php');

$route = $_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();
$router->get('/',function() use($pdo){
    $query = $pdo->prepare('SELECT post_title, Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_image, post_content  FROM blog_post ORDER BY post_created_at DESC');
    $query->execute();

    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

    include '../views/index.php';
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;

