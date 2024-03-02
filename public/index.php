<?php
require __DIR__ . '/../vendor/autoload.php';

use Mvc\Controllers\HomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Define app routes
//end point = o endpoint "/" é o caminho principal do site e ponto de partida para outras rotas
$app->get('/', HomeController::class . ':home');
$app->get('/about', HomeController::class . ':about');
$app->get('/connect', HomeController::class . ':connect');

// Run app
$app->run();

?>