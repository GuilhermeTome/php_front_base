<?php

namespace Modules\App\Home\Controllers;

class HomeController
{
    public function __construct()
    {
        # code ...
    }

    public function index()
    {
        return request()->view->render('home/index');
    }
}
