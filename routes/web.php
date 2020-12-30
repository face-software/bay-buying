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
Route::post('add-buyer','RegistrationController@add_buyer')->name('add.buyer');
Route::post('add-buying-house','RegistrationController@add_buying_house')->name('add.buying.house');
Route::post('add-supplier','RegistrationController@add_supplier')->name('add.supplier');
Route::post('add-manufacturer','RegistrationController@add_manufacturer')->name('add.manufacturer');
Auth::routes();


Route::get('/feed', 'HomeController@index')->name('feed');
Route::resource('/roles', 'Backend\RolesController');
Route::resource('/users', 'Backend\UserController');


Route::get('user/login','Backend\Auth\LoginController@showLoginForm')->name('user.login');
Route::prefix('feed')->group(base_path('routes/user.php'));
  