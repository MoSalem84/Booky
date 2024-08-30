<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\cPanel\CpanelController;
use App\Http\Controllers\Back\cPanel\AuthorController;
use App\Http\Controllers\Back\cPanel\CategoryController;
use App\Http\Controllers\Back\cPanel\BookController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "role" middleware group. Make something great!
|
*/

// User is authentication and has admin role

//cPanel Routes

Route::prefix('admin/cpanel/')->controller(CpanelController::class)->name('admin.cpanel.')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('home', 'index' )->name('home');

// Borrow books response 
    Route::get('borrow_request' , 'borrow_request')->name('borrow.request');
    Route::get('approve_borrow/{id}' , 'approve_borrow')->name('approve.borrow');
    Route::get('return_borrow/{id}' , 'return_borrow')->name('return.borrow');
    Route::get('reject_borrow/{id}' ,  'reject_borrow')->name('reject.borrow');

});


// cPanel main sections

Route::middleware(['auth', 'role:admin'])->group(function () {

    // prefix('admin/cpanel/')->

    Route::resource('categories', CategoryController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('books', BookController::class);

});

//Administrative Routes
Route::prefix('admin/cpanel/admin/')->controller(AdminController::class)->name('admin.cpanel.admin.')->middleware(['auth', 'role:admin'])->group(function () {

// register new admin
Route::get('register', 'register')->name('register');
Route::post('register', 'store')->name('store');


// Logout
Route::post('logout',  'logout')->name('logout');

// profile
Route::get('profile', 'profile')->name('profile');
});


Auth::routes();

