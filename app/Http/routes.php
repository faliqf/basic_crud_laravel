<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/example', ['as' => 'example', 'uses' => 'ExampleController@index']);
    Route::get('/example/create', ['as' => 'example-add', 'uses' => 'ExampleController@create']);
    Route::get('/example/register', ['as' => 'example-register', 'uses' => 'UsersController@register']);
    Route::post('/example/store', ['as' => 'example-store', 'uses' => 'UsersController@store']);
    Route::post('/example/store', ['as' => 'example-store', 'uses' => 'ExampleController@store']);
    Route::get('/example/edit/{id}', ['as' => 'example-edit', 'uses' => 'ExampleController@edit']);
    Route::post('/example/update/{id}', ['as' => 'example-update', 'uses' => 'ExampleController@update']);
    Route::post('/example/delete/{id}', ['as' => 'example-delete', 'uses' => 'ExampleController@destroy']);
});
