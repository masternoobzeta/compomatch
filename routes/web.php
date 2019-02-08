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


Route::get('technieuws', function()
{
    return view('pages/technieuws');
});
Route::get('projects', function()
{
    return view('pages.projects');
});
Route::get('contact', function()
{
    return view('pages.contact');
});

Route::get('/list', 'ListController@index')->name('list');

//Route::get('/motherboards', 'MotherboardController@index')->name('motherboard');

Route::resource('/motherboards', 'MotherboardController');

Route::resource('/cpus', 'CpuController');

Route::resource('/memories', 'MemoryController');

Route::resource('/harddrives', 'HarddriveController');

Route::resource('/powersupplies', 'PowersupplyController');

Route::resource('/towers', 'TowerController');

Route::resource('/videocards', 'VideocardController');

Route::resource('/articles', 'ArticleController');

Route::resource('/profiles', 'UserController');

Route::post('/articles/{article}/comments', 'CommentController@store');

Route::resource('/hardwares', 'HardwareController');

Route::resource('/technews', 'TecharticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
