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

// Route::get('/index', function () {
//     return view('welcome');
// });


Route::get('/', 'PagesController@index');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/mission', 'PagesController@mission');
Route::get('/management', 'PagesController@management');
Route::get('/contact', 'PagesController@contact');
Route::get('/donation', 'PagesController@donation');
Route::get('/members', 'PagesController@members');
Route::get('/events', 'PagesController@events');
Route::get('/patrons', 'PagesController@patrons');
Route::get('/executives', 'PagesController@executives');
Route::get('/videos', 'PagesController@videos');

Route::get('/blog', 'PagesController@blog');


// Admin Routes

Route::prefix('admin')->group(function(){
    Route::get('adminpage', 'HomeController@adminpage')->name('admin.page')->middleware('is_admin');
    Route::resource('slider','Admin\SliderController');
    Route::resource('member','Admin\MemberController');
    Route::resource('manage','Admin\ManageController');
    Route::resource('category','Admin\CategoryController');
    Route::resource('gallery','Admin\GalleryController');
    Route::resource('event','Admin\EventsController');
    Route::resource('patron','Admin\PatronController');
    Route::resource('executive','Admin\ExecutiveController');
    Route::resource('video','Admin\VideosController');
    Route::resource('tag','Admin\TagController');
    Route::resource('blog','Admin\BlogController');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
