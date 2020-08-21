<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('autocomplete', 'PhysiqueController@autocomplete')->name('autocomplete');
Route :: get ('/', 'PhysiqueController@index');
Route::get('home', 'MainController@index');
Route::resource('morals', 'MoralController');
Route::resource('physiques', 'PhysiqueController');
Route::resource('comptes', 'CompteController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
