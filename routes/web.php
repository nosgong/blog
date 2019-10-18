<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::any('{module}/{class}/{action}', function ($module, $class, $action) {
//    $ctrl = \App::make("\\App\\Http\\Controllers\\" . $module . "\\" . $class . "Controller");
//    return \App::call([$ctrl, $action]);
//});

//Route::get('test/{method}', 'API\TestApiController@method');
Route::any('test', 'API\TestApiController@testUrl');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
