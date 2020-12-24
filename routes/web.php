<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/setup', 'FrontendController@index')->name('setup.queries1');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/setup1','FrontendController@stepOne')->name('step1');
Route::get('/setup3','FrontendController@multiForm');

Route::post('/step1','FrontendController@checkAge')->name('check.age');
Route::post('/step2','FrontendController@greenCardConfirmation');
Route::post('/step3','FrontendController@checkUsResident')->name('check.dor');
Route::post('/step4','FrontendController@checkMariageDate')->name('check.dom');
Route::post('/step5','FrontendController@checkCitizenshipDate')->name('check.doc');


