<?php

namespace Controllers\User;

use Controllers\Controller;

final class TestsController extends Controller
{
    public function __construct()
    {
        # code ...
    }

    public function index()
    {
        return request()->view->render('tests/index', [
            'seo' => $this->getSeo('API')
        ]);
    }
}
