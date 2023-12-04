<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

	Route::get('/', function(){
		return HomeController::render();
	});

	Route::get(LaravelLocalization::transRoute('routes.home'), function(){
		return HomeController::render();
	});
	Route::get(LaravelLocalization::transRoute('routes.home'), function(){
		return HomeController::render();
	});

	Route::get(LaravelLocalization::transRoute('routes.about'), function(){
		return View::make('front.about');
	});

	Route::get(LaravelLocalization::transRoute('routes.map'),function(){
		return View::make('front.map');
	});

	Route::get(LaravelLocalization::transRoute('routes.blog'),function(){
		return View::make('front.blog');
	});

	Route::get('test',function(){
		return View::make('test');
	});

});
