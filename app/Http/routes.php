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

/*Route::get('/', function () {
	//return storage_path('images/1.png');
    //return view('welcome');
});*/

Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/test', function () {
	$tesseract = new TesseractOCR('/var/www/html/ocr/public/images/1.png'); 
	$text = $tesseract->recognize();
	dump($text );
});

Route::auth();
Route::get('/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

Route::get('/dashboard', [ 'as' => 'dashboard', 'uses' => 'HomeController@index']);

Route::group(['prefix'=>'directory'], function() {
    Route::get('/create', [
        'as' => 'directory.create',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@create'
    ]);

    Route::get('/list-all', [
        'as' => 'directory.index',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@index'
    ]);
    
    Route::post('/store', [
        'as' => 'directory.store',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@store'
    ]);

    Route::get('/disable/{num}', [
        'as' => 'directory.disable',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@disable'
    ]);

    Route::get('/view-files/{num}', [
        'as' => 'directory.view_files',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@view_files'
    ]);

    Route::get('/edit/{num}', [
        'as' => 'directory.edit',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@edit'
    ]);

    Route::post('/edit/{num}', [
        'as' => 'directory.update',
        'middleware' => 'auth',
        'uses' => 'DirectoriesController@update'
    ]);
});

Route::group(['prefix'=>'ocr'], function() {

    Route::get('/list-all', [
        'as' => 'ocr.index',
        'middleware' => 'auth',
        'uses' => 'OcrsController@index'
    ]);
    
    Route::post('/store', [
        'as' => 'ocr.store',
        'middleware' => 'auth',
        'uses' => 'OcrsController@store'
    ]);

    Route::post('/step_1', [
        'as' => 'ocr.step_1',
        'middleware' => 'auth',
        'uses' => 'OcrsController@step_1'
    ]);

    Route::get('/details/{num}', [
        'as' => 'ocr.details',
        'middleware' => 'auth',
        'uses' => 'OcrsController@details'
    ]);
    Route::get('/edit/{num}', [
        'as' => 'ocr.edit',
        'middleware' => 'auth',
        'uses' => 'OcrsController@edit'
    ]);
    Route::post('/edit/{num}', [
        'as' => 'ocr.update',
        'middleware' => 'auth',
        'uses' => 'OcrsController@update'
    ]);
});
