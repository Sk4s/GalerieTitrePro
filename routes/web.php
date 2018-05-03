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

Route::get('/', 'PagesController@home')->name('/');

Route::get('/espace-avatar', 'PagesController@EspaceAvatar')->name('espace-avatar');
Route::get('/to-do-list', 'PagesController@ToDoList')->name('to-do-list');
Route::get('/gallery', 'PagesController@Gallery')->name('gallery');
Route::get('/social-network', 'PagesController@SocialNetwork')->name('social-network');
Route::get('/vue-chat', 'PagesController@vueChat')->name('vue-chat');
Route::get('/milolib', 'PagesController@Milolib')->name('milolib');