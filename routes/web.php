<?php

use App\Http\Controllers\ProductList\ProductListController;
use App\Models\Product;
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
    $products = Product::latest()->get();
    return view('index', compact('products'));
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
        Route::get('edit-style/{id}', 'StyleController@editStyle');
        Route::put('update-style/{id}', 'StyleController@updateStyle');
        Route::delete('delete-style/{id}', 'StyleController@deleteStyle');

        // Type Management
        Route::get('create-type', 'TypeController@createType');
        Route::get('insert-type', 'TypeController@insertType');
        Route::get('type', 'TypeController@index');
        Route::get('edit-type/{id}', 'TypeController@editType');
        Route::put('update-type/{id}', 'TypeController@updateType');
        Route::delete('delete-type/{id}', 'TypeController@deleteType');

        // Collection
        Route::get('create-collection', 'CollectionController@createCollection');
        Route::get('insert-collection', 'CollectionController@insertCollection');
        Route::get('collection', 'CollectionController@index');
        Route::get('edit-collection/{id}', 'CollectionController@editCollection');
        Route::put('update-collection/{id}', 'CollectionController@updateCollection');
        Route::delete('delete-collection/{id}', 'CollectionController@deleteCollection');

        // Product Management
        Route::get('create-product', 'ProductController@createProduct');
        Route::post('insert-product', 'ProductController@insertProduct');
        Route::get('product', 'ProductController@index');
        Route::get('edit-product/{id}', 'ProductController@editProduct');
        Route::get('update-product/{id}', 'ProductController@updateProduct');
        Route::delete('delete-product/{id}', 'ProductController@deleteProduct');
    });
});

Route::get('/product_list',[ProductListController::class, 'viewProductList']);
Route::get('/product_details/{id}', [ProductListController::class, 'viewProductDetail']);

/* regis */
Route::get('/regis', [ProductListController::class, 'viewProductDetail']);
