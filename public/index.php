<?php

use core\Model;
use core\Controller;
use core\Helper;
use core\Exception as CatchError;

require_once __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\','/',$class_name);

    if(file_exists(__DIR__.'/../'.$class_name.'.php')) {
        require __DIR__.'/../'.$class_name.'.php';
    }
});

require_once 'functions.php';

try {
    require_once '../routes/route.php';

    $dataController = $route->execute();

    $use = '../controllers/'.$dataController['controller'].'.php';

    if(file_exists($use)) {
        require $use;
        $controller = 'controllers\\'.$dataController['controller'];


        $command = new $controller($dataController);

        if(method_exists($command,$dataController['method']))
        {
            call_user_func(array($command, $dataController['method']),$dataController['request']);
        } else {
            throw (new \core\Exception('The method <strong>'.$dataController['method']. '</strong> doesn\'t exists in <strong>' . $dataController['controller'] . '</strong>'));
        }
    } else {
        throw (new \core\Exception('The controller <strong>'.$dataController['controller']. '</strong> doesn\'t exists.'));
    }
} catch (CatchError $catchError) {
    $catchError->render();
}


