<?php

namespace controllers;

use core\Controller;
use core\Helper;
use models\Article;

class HomeController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);
    }

    public function index()
    {
        $this->render('home');
    }

    public function start()
    {
        $this->render('start');
    }

    public function routes()
    {
        $this->render('routes');
    }

    public function controllers()
    {
        $this->render('controllers');
    }

    public function models()
    {
        $this->render('models');
    }

    public function views()
    {
        $this->render('views');
    }

    public function contact()
    {
        $this->render('contact');
    }

    public function options()
    {
        $this->render('options');
    }

}