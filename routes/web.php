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

	//Route::get('/', ['as' => 'frontend.home', 'uses' => 'frontendController@home']); 
	Route::get('about-us', ['as' => 'frontend.about-us', 'uses' => 'frontendController@about']);
	Route::get('services', ['as' => 'frontend.services', 'uses' => 'frontendController@services']);
	Route::get('portfolio', ['as' => 'frontend.portfolio', 'uses' => 'frontendController@portfolio']);
	Route::get('elements', ['as' => 'frontend.elements', 'uses' => 'frontendController@elements']);
	Route::get('blog', ['as' => 'frontend.blog', 'uses' => 'frontendController@blog']);
	Route::get('blog-detail', ['as' => 'frontend.blog-detail', 'uses' => 'frontendController@blogDetail']);
	Route::get('contact', ['as' => 'frontend.contact', 'uses' => 'frontendController@contact']);
