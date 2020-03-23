<?php

namespace routes;

require '../vendor/autoload.php';

use core\Helper;
use core\Route;

$route = new Route();

$route->get('/','HomeController','index');
$route->get('/start','HomeController','start');
$route->get('/routes','HomeController','routes');
$route->get('/controllers','HomeController','controllers');
$route->get('/models','HomeController','models');
$route->get('/views','HomeController','views');
$route->get('/contact','HomeController','contact');
$route->get('/options','HomeController','options');