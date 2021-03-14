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
    'middleware' => Modules\App\Middleware::class,
    'prefix' => '/',
    'namespace' => 'Modules\App\Home\Controllers',
], function () {
    SimpleRouter::get('/', 'HomeController@index')->name('App');
});
