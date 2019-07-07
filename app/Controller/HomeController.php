<?php

namespace App\Controller;

use Psr\Container\ContainerInterface;

class HomeController
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function index($request, $response, $args)
    {
        return $this->container->get('view')->display('home.tpl');
    }
}