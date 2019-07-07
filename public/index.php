<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;

require __DIR__ . '/../vendor/autoload.php';

// Add DIC
$container = new Container();

// Add smarty view object
$container->set('view', function() {
    return new Smarty();
}); 

// Implement DIC
AppFactory::setContainer($container);

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write('hi.html');
    return $response;
});

$app->get('/login', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Welcome to login page");
    return $response;
});

$app->run();