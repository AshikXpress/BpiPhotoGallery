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
Route::get('/dashboard','galleryController@dashboard');
Route::get('/addimage','galleryController@addimage');
Route::get('/editImage/{id}','galleryController@editImage');
Route::post('/updateImage/{id}','galleryController@updateImage');
Route::get('/imageDelete/{id}','galleryController@imageDelete');
Route::post('/addimage','galleryController@addimageUp');
Route::get('/imageDetails/{id}','galleryController@imageDetails');
Route::get('/allGalleryImage','galleryController@allGalleryImage');
//video gallery
Route::get('/addvideo','galleryController@addvideo');
Route::post('/addvideo','galleryController@addvideoUp');
Route::get('/editVideo/{id}','galleryController@editVideo');
Route::post('/videoUpdate/{id}','galleryController@videoUpdate');
Route::get('/videoDelete/{id}','galleryController@videoDelete');
Route::get('/videoDetailes/{id}','galleryController@videoDetailes');

Route::get('/allYoutubeVideo','galleryController@allYoutubeVideo');
//font page
Route::get('/','FontPageController@landPage');
Route::get('/landPage','FontPageController@demo');