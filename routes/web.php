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

$app->get('/', function () use ($app) {
    return response(json_encode([
        'name' => 'Outer Heaven API',
        'description' => 'Esta API esta actualmente en desarrollo'
    ], JSON_PRETTY_PRINT), 200, ['Content-Type' => 'application/json']);
});

$app->get('/api/v1', function () use ($app) {
    return 'Welcome to Outer Heaven API!';
});
