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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','FrontendController@index')->name('home');
Route::get('/buyer-registration','FrontendController@buyerForm')->name('buyer.reg');
Route::get('/buying-registration','FrontendController@buyingHouseForm')->name('buying.reg');
Route::get('/supplier-registration','FrontendController@supplierForm')->name('supplier.reg');
Route::get('/manufacturer-registration','FrontendController@manufacturerForm')->name('manufacturer.reg');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/roles', 'Backend\RolesController');
Route::resource('/users', 'Backend\UserController');


Route::get('user/login','Backend\Auth\LoginController@showLoginForm')->name('user.login');
Route::prefix('feed')->group(base_path('routes/user.php'));
