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
    return view('welcome');
});

Route::get('/backend/article/create', 'ArticleController@create');
Route::get('/backend/cathegorie/create', 'BackendController@create');

Route::post('/backend/cathegorie', 'BackendController@store');
Route::post('/backend/article', 'ArticleController@store');

Route::get('/frontend', 'FrontendController@index');
Route::get('/backend', 'BackendController@index');
Route::get('/article/{article}', 'FrontendController@showArticle');
Route::get('/cathegorie/{cathegorie}', 'FrontendController@indexCathegorie');
Route::get('/backend/cathegorie/{cathegorie}', 'BackendController@indexCathegorie');

Route::get('/backend/article/{article}', 'BackendController@showArticle');
Route::get('/backend/article/{article}/edit', 'ArticleController@edit')->name('backend.edit');
Route::get('/backend/article/{article}/delete', 'ArticleController@delete')->name('backend.delete');

Route::patch('/backend/edit/{article}', 'ArticleController@update')->name('backend.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
