<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$app = $router;

$app->group(['prefix'=>'api/v1'], function() use($app){
    $app->get('/stoks', 'StokController@index');
    $app->post('/stok', 'StokController@create');
    $app->get('/stok/{id}', 'StokController@show');
    $app->put('/stok/{id}', 'StokController@update');
});