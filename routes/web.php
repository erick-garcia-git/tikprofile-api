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
/** @var Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => 'auth'], function () use($router) {
    $router->post('login', 'AuthController@login');
});

$router->group(['prefix' => 'hashtag'], function () use($router) {
    $router->get('search', 'HashTagController@search');
});

$router->group(['prefix' => 'hashtag'], function () use($router) {
    $router->get('list', 'HashTagController@trending');
});

$router->group(['prefix' => 'user'], function () use($router) {
    $router->get('', 'UserController@getRandom');
    $router->get('{sec_uid}/follow', 'UserController@follow');
});

$router->get('/', function () use ($router) {
    return 'TikTok Profile API developed by Zhao SongXun';
});
