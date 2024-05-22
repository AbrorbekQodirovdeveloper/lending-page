<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\FeatureController;
use App\Http\Controllers\backend\MainController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\PricingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\frontend\IndexController;

use Illuminate\Support\Facades\Route;

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
Route::get('/adminpanel', [AdminController::class , 'admin' ])->name('admin');
Route::get('/admin', [AdminController::class , 'adminpassword' ])->name('adminpassword');
Route::get('/client', [ClientController::class , 'client' ])->name('adminview.page');
 //end admin panel home pages
 // admin panel main routes star
     Route::prefix('main')->group(function () {
        Route::get('/view', [MainController::class, 'mainView'])->name('all.main');
        Route::get('/add', [MainController::class, 'mainAdd'])->name('main.add');
        Route::post('/store', [MainController::class, 'mainStore'])->name('main.store');
        Route::get('/edit/{id}', [MainController::class, 'mainEdit'])->name('main.edit');
        Route::post('/update/{id}', [MainController::class, 'mainUpdate'])->name('main.update');
        Route::get('/delete/{id}', [MainController::class, 'mainDelete'])->name('main.delete');
    });
// end admin panel main routes
  //admin panel pricing routes start
     Route::prefix('pricing')->group(function () {
        Route::get('/view', [PricingController::class, 'pricingView'])->name('all.pricing');
        Route::get('/add', [PricingController::class, 'pricingAdd'])->name('pricing.add');
        Route::post('/store', [PricingController::class, 'pricingStore'])->name('pricing.store');
        Route::get('/edit/{id}', [PricingController::class, 'pricingEdit'])->name('pricing.edit');
        Route::post('/update/{id}', [PricingController::class, 'pricingUpdate'])->name('pricing.update');
        Route::get('/delete/{id}', [PricingController::class, 'pricingDelete'])->name('pricing.delete');
    });
 // end admin panel pricing route

//admin panel feature routes startd
   Route::prefix('feature')->group(function () {
        Route::get('/view', [FeatureController::class, 'featureView'])->name('all.feature');
        Route::get('/add', [FeatureController::class, 'featureAdd'])->name('feature.add');
        Route::post('/store', [FeatureController::class, 'featureStore'])->name('feature.store');
        Route::get('/edit/{id}', [FeatureController::class, 'featureEdit'])->name('feature.edit');
        Route::post('/update/{id}', [FeatureController::class, 'featureUpdate'])->name('feature.update');
        Route::get('/delete/{id}', [FeatureController::class, 'featureDelete'])->name('feature.delete');
    });
   // end admin panel feature route

//mainpage route start
Route::get('/', [IndexController::class , 'index' ])->name('index');
 //  end route main page

   //contact route start
Route::get('/message', [MessageController::class , 'message' ])->name('message');
Route::post('/contact', [MessageController::class , 'contact' ])->name('contact');
Route::get('/delete/{id}', [MessageController::class, 'contactDelete'])->name('contact.delete');
//end cotact route


Route::get('/client/login', [ClientController::class, 'loginView'])->name('login.page');
Route::post('/client/register', [ClientController::class, 'registerclient'])->name('client.register');
// Route::post('/login/client', [ClientController::class, 'loginclient'])->name('login.client');
Route::get('/client/logout', [ClientController::class, 'logoutclient'])->name('client.logout');

