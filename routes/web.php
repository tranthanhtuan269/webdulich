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

Route::get('/test', 'SiteController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.home');
Route::get('/config-site', 'HomeController@config')->name('home.config');
Route::get('/contact-us', 'HomeController@contact')->name('home.contact');
Route::post('/store', 'HomeController@store')->name('home.store');


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