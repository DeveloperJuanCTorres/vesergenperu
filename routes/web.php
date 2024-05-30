<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
//     return view('home');
// });

Route::get('/',[AdminController::class, 'index'])->name('index');
Route::get('/detail/{product}',[adminController::class,'detail'])->name('detailid');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
