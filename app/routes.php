<?php
use App\Controller\HomeController;

$app->get('/', HomeController::class .':index');

$app->get('/login', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Welcome to login page");
    return $response;
});