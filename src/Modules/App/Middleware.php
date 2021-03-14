<?php

namespace Modules\App;

use League\Plates\Engine;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class Middleware implements IMiddleware
{
    public function handle(Request $request): void
    {
        $request->view = (new Engine(PATH_RESOURCE . 'views/app', 'phtml'));
    }
}
