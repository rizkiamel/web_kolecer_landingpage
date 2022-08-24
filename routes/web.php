<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontpage;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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



Route::group(['middleware' => [
    'auth:sanctum',
    'verified',
    'accessrole'
]], function () {

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pages', function() {
        return view('admin.pages');
    })->name('pages');

    Route::get('/navigation-menus', function() {
        return view('admin.navigation-menus');
    })->name('navigation-menus');

    Route::get('/users', function() {
        return view('admin.users');
    })->name('users');

    Route::get('/user-permissions', function() {
        return view('admin.user-permissions');
    })->name('user-permissions');

    Route::get('/harga', function() {
        return view('admin.hargas');
    })->name('harga');

    Route::get('/testimoni', function() {
        return view('admin.testimonis');
    })->name('testimoni');

    Route::get('/notifikasi', function() {
        return view('admin.notifikasi');
    })->name('notifikasi');

    
    Route::get('/cetak-struk', function() {
        return view('admin.cetak');
    })->name('cetak-struk');

    //Route::get('/cetak-struk', [CetakController::class, 'generatePdf'])->name('cetak-struk');
});

//Route::get('/', FrontPage::class);
//Route::get('/{urlslug}', FrontPage::class);
Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/index', function () {
    return view('layouts.index');
});
Route::get('employee', 'EmployeeController@create')->name('employee.create');
Route::post('employee', 'EmployeeController@store')->name('employee.store');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('form', [UserController::class, 'form'])->name('user.form');
Route::get('category/product/{product}', [ProductController::class, 'removeCategory'])->name('category.product.delete');
Route::get('product', [ProductController::class, 'index'])->name('product');

Route::get('login/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [GoogleController::class, 'callbackGoogle']);
Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);