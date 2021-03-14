<?php

/**
 * 
 * Web Routes
 * 
 * Use this file to create the routes for 
 * application, if you wish you can create
 * in other location and use this file for
 * imports.
 * 
 */

use Pecee\SimpleRouter\SimpleRouter;

/**
 * App routes
 */
SimpleRouter::group([
    'middleware' => Middlewares\ViewMiddleware::class,
    'prefix' => '/',
    'namespace' => 'Controllers\User',
], function () {
    SimpleRouter::get('/', 'HomeController@index')->name('App');
    SimpleRouter::get('/ip', 'TestsController@index')->name('AppTests');
});
