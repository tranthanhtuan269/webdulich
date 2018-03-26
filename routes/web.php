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

Route::get('getImageForm', 'HomeController@getImageForm')->name('home.getImageForm');
Route::post('postImageForm', 'HomeController@postImageForm')->name('home.postImageForm');
Route::get('getJCrop', 'HomeController@getJCrop')->name('home.getJCrop');
Route::post('postJCrop', 'HomeController@postJCrop')->name('home.postJCrop');

Route::get('/test', 'SiteController@test');
Route::post('/postImage', 'HomeController@postImage');
Route::post('/ajaxpro', 'HomeController@ajaxpro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.home');
Route::post('home/active', 'HomeController@active')->name('home.active');
Route::post('home/inactive', 'HomeController@inactive')->name('home.inactive');
Route::get('/config-site', 'HomeController@config')->name('home.config');
Route::post('/store', 'HomeController@store')->name('home.store');

Route::get('/contacts', 'ContactController@list')->name('contact.list');
Route::get('/contacts/create', 'ContactController@create')->name('contact.create');
Route::post('/contacts/store', 'ContactController@store')->name('contact.store');
Route::get('/contacts/{id}', 'ContactController@view')->name('contact.view');
Route::delete('/contacts/{id}', 'ContactController@destroy')->name('contact.destroy');

Route::resource('categories', 'CategoryController');
Route::post('categories/active', 'CategoryController@active')->name('categories.active');
Route::post('categories/inactive', 'CategoryController@inactive')->name('categories.inactive');

Route::resource('services', 'ServiceController');
Route::post('services/active', 'ServiceController@active')->name('services.active');
Route::post('services/inactive', 'ServiceController@inactive')->name('services.inactive');

Route::resource('budgets', 'BudgetController');
Route::post('budgets/active', 'BudgetController@active')->name('budgets.active');
Route::post('budgets/inactive', 'BudgetController@inactive')->name('budgets.inactive');

Route::resource('durations', 'DurationController');
Route::post('durations/active', 'DurationController@active')->name('durations.active');
Route::post('durations/inactive', 'DurationController@inactive')->name('durations.inactive');

Route::resource('cities', 'CityController');
Route::post('cities/active', 'CityController@active')->name('cities.active');
Route::post('cities/inactive', 'CityController@inactive')->name('cities.inactive');

Route::resource('activities', 'ActivityController');
Route::post('activities/active', 'ActivityController@active')->name('activities.active');
Route::post('activities/inactive', 'ActivityController@inactive')->name('activities.inactive');

Route::resource('blogs', 'BlogController');
Route::post('blogs/active', 'BlogController@active')->name('blogs.active');
Route::post('blogs/inactive', 'BlogController@inactive')->name('blogs.inactive');

// add latest
Route::get('blogs/{id}', 'SiteController@showBlog')->name('blogs.showBlog');
Route::get('categories/{id}', 'SiteController@showCategory')->name('categories.showCategory');