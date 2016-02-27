<?php
//blog pages
Route::get('/', function() {
  return redirect('/blog');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
//admin area
//Route::get('admin', function() {
//  return redirect('/admin/post');
//});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('admin/post', 'Admin\PostController');
    Route::resource('admin/tag', 'Admin\TagController');
    Route::get('admin/upload', 'Admin\UploadController@index');
});
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

//Route::group(['middleware' => ['web']], function () {
    //
//});
