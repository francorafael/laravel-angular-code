<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app');
});

//ROTA DE TOKEN AUTENTICACAO esta no APP.JS grantPath: 'oauth/token',
Route::post('oauth/access_token', function() {
    return \Illuminate\Http\Response::json(Authorizer::issueAcessToken());
});
