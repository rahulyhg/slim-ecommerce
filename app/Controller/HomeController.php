<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $this->container->get('view');
    }

    public function index(Request $request, Response $response, $args)
    {
        $this->view->assign('name', 'herman');
        $this->view->display('home.tpl');

        return $response;
    }
}