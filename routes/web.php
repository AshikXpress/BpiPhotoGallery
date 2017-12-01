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
//admin pages
use Illuminate\Support\Facades\Route;


Route::get('/addadmin','adminController@addadmin');
Route::post('/addadmin','adminController@addadminInsert');
Route::get('/adminInfo','adminController@adminInfo');
Route::get('/adminEdit/{id}','adminController@adminEdit');
Route::post('/adminUpdate/{id}','adminController@adminUpdate');
Route::get('/adminDelete/{id}','adminController@adminDelete');


//admin login syatem
Route::get('/login','adminController@login');

//image gallery
Route::get('/','galleryController@dashboard');
Route::get('/addimage','galleryController@addimage');
Route::post('addimage','galleryController@addimageUp');