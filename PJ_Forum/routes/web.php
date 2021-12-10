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

Route::get('/', ['as'=>'home', 'uses'=>'TagController@index']);
Route::get('/blog-detail/{blogId}', ['as'=>'blogDetail', 'uses'=>'BlogController@blogDetail']);
Route::get('/blog-post', ['as'=>'blogPost', 'uses'=>'TagController@blogPost']);
Route::get('/search', ['as'=>'search', 'uses'=>'BlogController@search']);

Route::get('/admin/user', ['as'=>'admin_user', 'uses'=>'AdminController@list_user']);
Route::get('/admin/static', ['as'=>'admin_static', 'uses'=>'AdminController@static']);
Route::get('/admin/tag', ['as'=>'admin_tag', 'uses'=>'AdminController@list_tag']);
Route::get('/admin/blog', ['as'=>'admin_blog', 'uses'=>'AdminController@list_blog']);
Route::get('/admin/add-blog', ['as'=>'admin_add_blog', 'uses'=>'AdminController@add_blog']);
Route::get('/admin/add-user', ['as'=>'admin_add_user', 'uses'=>'AdminController@list_blog']);
Route::get('/admin/add', ['as'=>'admin_blog', 'uses'=>'AdminController@list_blog']);

Route::post('/blog-post', ['as'=>'blogpostdone', 'uses'=>'BlogController@insert']);
Route::post('/contact', ['as'=>'contactmail', 'uses'=>'MailController@sendMail']);

Route::view('/register', 'register');
Route::view('/contact', 'contact');
