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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Front\homeController@index')->name('main');
Route::get('/archive', 'Front\newsController@index')->name('Front.archive.index');
Route::get('/archive/{id}', 'Front\newsController@view')->name('Front.archive.view');
Route::get('/page/{id}', 'Front\homeController@page')->name('Front.page');
Route::get('/spage/{id}', 'Front\homeController@spage')->name('Front.spage');



Auth::routes();
Route::get('/exit', function (){\Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('log_out');

Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function(){
    Route::get('/', function(){
        return view('CMS.home');})->name('CMS.home');


    Route::group(['prefix' => 'menu'], function (){
        Route::get('/create', 'CMS\menusController@create')->name('CMS.menu.create');
         Route::post('/create_post', 'CMS\menusController@create_post')->name('CMS.menus.create_post');
         Route::get('/createsub', 'CMS\menusController@createSub')->name('CMS.menus.createsub');
         Route::post('/createsub_post', 'CMS\menusController@createSub_post')->name('CMS.menus.createsub_post');
         Route::get('/remove/{id}', 'CMS\menusController@remove')->name('CMS.menus.remove');
         Route::get('/remove_subs/{id}', 'CMS\menusController@remove_subs')->name('CMS.menus.remove_subs');
         Route::get('/edit/{id}', 'CMS\menusController@edit')->name('CMS.menus.edit');
         Route::post('/edit_post/{id}', 'CMS\menusController@edit_post')->name('CMS.menus.edit_post');
         Route::get('/editsubs/{id}', 'CMS\menusController@editSubs')->name('CMS.menus.editsubs');
         Route::post('/editsubs_post/{id}', 'CMS\menusController@editSubs_post')->name('CMS.menus.editSubs_post');
        Route::get('/', 'CMS\menusController@index')->name('CMS.menu.list');
    });


    Route::group(['prefix' => 'news'], function (){
       Route::get('/list', 'CMS\newsController@index')->name('CMS.news.list');
       Route::get('/create', 'CMS\newsController@create')->name('CMS.news.create');
       Route::post('/create_post', 'CMS\newsController@create_post')->name('CMS.news.create_post');
       Route::get('/remove/{id}', 'CMS\newsController@remove')->name('CMS.news.remove');
       Route::get('/edit/{id}','CMS\newsController@edit')->name('CMS.news.edit');
       Route::post('/edit_post/{id}', 'CMS\newsController@edit_post')->name('CMS.news.edit_post');
    });
});




