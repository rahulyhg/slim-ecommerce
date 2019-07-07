<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
// Add DIC
require '../app/container.php';
// Implement DIC
AppFactory::setContainer($container);

$app = AppFactory::create();
// Add routes
require '../app/routes.php';

$app->run();