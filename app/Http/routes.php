<?php
//blog pages
Route::get('/', function() {
  return redirect('/blog');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');
Route::get('rss', 'BlogController@rss');
Route::get('sitemap.xml', 'BlogController@siteMap');
//admin area
//Route::get('admin', function() {
//  return redirect('/admin/post');
//});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('admin/post', 'Admin\PostController', ['except' => 'show']);
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);
    Route::get('admin/upload', 'Admin\UploadController@index');
    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
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
