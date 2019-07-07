<?php
use DI\Container;

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