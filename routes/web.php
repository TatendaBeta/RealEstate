<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StoreImageController;


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


// route to get property details

Route::get('propertyy', [PropertyController::class, 'index']);
Route::get('add-property', [PropertyController::class, 'create']);
Route::post('add-property', [PropertyController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('/client', ClientController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('register', [RegisterControllerArgumentLocatorsPass::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::resource('property', StoreImageController::class);
// Route::resource('property/insert_image', StoreImageController::class);
// Route::resource('property/fetch_image', StoreImageController::class);
// Route::get('store_image', 'StoreImageController@index');

// Route::post('store_image/insert_image', 'StoreImageController@insert_image');

// Route::get('store_image/fetch_image/{id}', 'StoreImageController@fetch_image');

