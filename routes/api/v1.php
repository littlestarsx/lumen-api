<?php
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function($api){
    $api->get('posts', 'PostController@index');
    $api->post('posts', 'PostController@store');
    $api->get('posts/{id}', 'PostController@show');
    $api->put('posts/{id}', 'PostController@modify');
    $api->patch('posts/{id}', 'PostController@update');
});