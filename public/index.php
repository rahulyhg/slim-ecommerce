<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use App\Controller\HomeController;

require __DIR__ . '/../vendor/autoload.php';

// Add DIC
$container = new Container();

// Add smarty view object
$container->set('view', function() {
    $smarty = new Smarty();
    $smarty->setTemplateDir('../app/View/templates');
    $smarty->setCompileDir('../smarty/compiled');
    $smarty->setCacheDir('../smarty/cache');
    $smarty->setConfigDir('../smarty/configs');

    return $smarty;
}); 

// Implement DIC
AppFactory::setContainer($container);

$app = AppFactory::create();

$app->get('/', HomeController::class .':index');

$app->get('/login', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Welcome to login page");
    return $response;
});

$app->run();