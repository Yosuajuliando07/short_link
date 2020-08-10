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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'ShortLinkController@short')->name('short');
Route::get('/dk/{link}', 'ShortLinkController@shortLink')->name('shortLink');

Auth::routes();

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('kelola_member', 'KelolamemberController@index')->name('kelola_member');

    Route::post('dashboard', 'ShortLinkController@store')->name('post.short.link');
    Route::resource('listshortlink', 'ListShortLink');
    Route::get('{short_link}', 'ShortLinkController@shortenLink')->name('shorten.link');
});
Route::group(['as'=>'member.','prefix'=>'member', 'namespace'=>'Member', 'middleware'=>['auth','member']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});