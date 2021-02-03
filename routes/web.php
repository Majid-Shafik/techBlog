<?php

use App\Http\Controllers\admin\ArticlesController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\front\HomeController;

use Illuminate\Support\Facades\Route;
use Prophecy\Call\Call;

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

//Route::resource('category',CategoriesController::class);
 



Route::get('/',[HomeController::class,'index'])->name('frontend');

/*Route::get('/', function () {
    return view('front.index');
});*/


//['middleware'=>'auth']
Route::group(['prefix'=>'admin'],function(){

    Route::get('dashboard/{id?}',[DashboardController::class,'index']);

    Route::resource('category',CategoriesController::class);
    Route::resource('article',ArticlesController::class);

});





