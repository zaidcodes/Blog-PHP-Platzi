<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once('../config.php');

$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']); 
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL',$baseUrl);

$route = $_GET['route'] ?? '/';

function render($fileName, $params = []){
    ob_start();
    extract($params);
    include $fileName;
    return ob_get_clean();
}

use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();

$router->controller('/', App\Controllers\IndexController::class);

$router->get('/admin',function(){
    return render('../views/admin/index.php');
});

$router->get('/admin/posts/',function() use($pdo){
    $query = $pdo->prepare('SELECT Date_format(post_created_at,"%d-%M-%Y") as post_created_at, post_created_by, post_title FROM blog_post ORDER BY post_created_at,post_created_by ASC');
    $query->execute();
    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
    return render('../views/admin/posts.php', ['blogPosts'=>$blogPosts]);
});

$router->get('/admin/posts/create',function(){
    return render('../views/admin/insert-post.php');
});

$router->post('/admin/posts/create',function() use($pdo){
    $result = false;
    $sql = "INSERT INTO blog_post (post_title, post_content, post_created_by) VALUES (:title, :content, :author);";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['inputTitle'],
        'content' => $_POST['inputContent'],
        'author' => $_POST['inputAuthor']
    ]);
    return render('../views/admin/insert-post.php', ['result'=>$result]);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;

