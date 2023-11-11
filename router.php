<?php
require_once  'libs/Apirouter.php';
require_once 'controllers/menuApiController.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$router = new Router();

//                
$router->route($_GET["resource"], $_SERVER["REQUEST_METHOD"]);
//               Endpoint-verbo-    controller        metodo          
$router->addRoute('productos', 'GET', 'menuApiController', 'get');
