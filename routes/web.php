<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/dashboard','Admin\DashboardController@index')->name('admin.dashboard');

Route::group(['prefix' => 'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>'auth'], function () {
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
});

Route::get('/news/all','FrontendController@index');
Route::get('/single/news/{id}','FrontendController@single_news');
Route::get('/categories/all','FrontendController@all_categories');
Route::get('/categories/news/all/{id}','FrontendController@news_by_category');
Route::get('/search','FrontendController@search_news');
Route::get('/news/latest','FrontendController@latest');
