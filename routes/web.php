<?php

use App\Http\Controllers\ProductList\ProductListController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    // Admin Login Route
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        // Admin Dashboard Route 
        Route::get('dashboard', 'AdminController@dashboard');
        // Update Admin password
        Route::match(['get', 'post'], 'update-admin-password', 'AdminController@updateAdminPassword');
        // Check admin password
        Route::post('check-admin-password', 'AdminController@checkAdminPassword');
        // Admin Logout
        Route::get('logout', 'AdminController@logout');

        // Style Management
        Route::get('create-style', 'StyleController@createStyle');
        Route::get('insert-style', 'StyleController@insertStyle');
        Route::get('style', 'StyleController@index');
    });
});

Route::get('/product_list',[ProductListController::class, 'viewProductList']);
