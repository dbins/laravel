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

Route::get('/', 'home@index')->name('home');
Route::get('/contato', 'contato@index')->name('contato');
Route::post('/contato', 'contato@enviar')->name('enviar');
Route::get('/blog', 'blog@index')->name('blog');
Route::get('/videos', 'videos@index')->name('videos');
Route::get('/ferramentas', 'ferramentas@index')->name('ferramentas');
Route::get('/aplicativos', 'aplicativos@index')->name('aplicativos');
Route::get('/portfolio', 'portfolio@index')->name('portfolio');
