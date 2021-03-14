<?php

/**
 * 
 * Error Routes
 * 
 * Use this file to configure the
 * error routes of the application.
 * 
 */

use League\Plates\Engine;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/not-found', function () {
    return (new Engine(PATH_RESOURCE . '/views/error', 'phtml'))->render('notFound');
});

SimpleRouter::error(function (Request $request, \Exception $exception) {
    if ($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        return response($request)->httpCode(404)->redirect('/not-found');
    }
});
