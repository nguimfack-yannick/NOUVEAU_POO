<?php

use App\Exceptions\NotFoundException;
use Router\Router;

require "../vendor/autoload.php";
define('VIEWS',dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME'])).DIRECTORY_SEPARATOR;

$router = new Router($_GET['url']);

$router->get('/posts','App\Controllers\BlogController@index');
$router->get('/','App\Controllers\BlogController@welcome');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
try{
    $router->run();
} catch(NotFoundException $e){
    echo $e->error404();
}


