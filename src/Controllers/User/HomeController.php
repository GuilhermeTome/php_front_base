<?php

namespace Controllers\User;

use Controllers\Controller;

final class HomeController extends Controller
{
    public function __construct()
    {
        # code ...
    }

    public function index()
    {
        return request()->view->render('home/index', [
            'seo' => $this->getSeo('Home')
        ]);
    }
}
