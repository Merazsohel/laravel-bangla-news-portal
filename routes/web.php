<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Frontend

Route::get('/', 'FrontendController@index');
Route::get('news-details/{slug}', 'FrontendController@newsDetails');
Route::get('news-details/{slug}', 'FrontendController@newsDetails');
Route::get('category/{name}', 'FrontendController@categoryWiseNews');
Route::get('archive-data/{date}','FrontendController@archiveData');

//Admin Panel
//Category

Auth::routes(['register' => false, 'login']);

Route::get('home', 'HomeController@index')->name('home');
Route::get('create-category','CategoryController@create');
Route::post('store-category','CategoryController@store');
Route::get('all-category','CategoryController@all');
Route::get('delete-category/{id}','CategoryController@delete');
Route::get('edit-category/{id}','CategoryController@edit');
Route::post('update-category/{id}','CategoryController@update');

//Post

Route::get('create-post','PostController@create');
Route::post('store-post','PostController@store');
Route::get('all-post','PostController@all');
Route::get('delete-post/{id}','PostController@delete');
Route::get('edit-post/{id}','PostController@edit');
Route::post('update-post/{id}','PostController@update');
Route::get('nonBreaking-news/{id}','PostController@nonBreaking');
Route::get('breaking-news/{id}','PostController@breaking');

//Settings

Route::get('create-settings','SettingController@create');
Route::post('store-settings','SettingController@store');
Route::get('all-settings','SettingController@all');
Route::get('delete-settings/{id}','SettingController@delete');
Route::get('edit-settings/{id}','SettingController@edit');
Route::post('update-settings/{id}','SettingController@update');
