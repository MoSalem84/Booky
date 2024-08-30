<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\AuthorController;
use App\Http\Controllers\Front\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "role" middleware group. Make something great!
|
*/

Route::get('/' , [HomeController::class,'index'])->name('home') ;

// User is authentication and has user role

Route::middleware(['verified', 'role:user'])->controller(UserController::class)->name('front.')->group(function(){

    Route::get('/user/profile' , 'profile')->name('user.profile');
    Route::get('/borrow_status' , 'borrow_status')->name('borrow.status');
    Route::get('/cancel_borrow/{id}' , 'cancel_borrow')->name('cancel.borrow');
});

    Route::controller(HomeController::class)->name('front.')->group(function(){

        Route::get('/discover' , 'discover')->name('discover') ;
        Route::get('/about' , 'about')->name('about') ;
        Route::get('/search' , 'search')->name('search') ;
        Route::get('/borrow_book/{id}' ,'borrow')->name('borrow') ;
        Route::get('/cat_menubar/{id}' ,'cat_menubar') ;
        Route::get('/book_details/{id}' , 'book_details')->name('book.details');
    });

    Route::controller(AuthorController::class)->name('front.')->group(function(){

        Route::get('/authors/index' , 'index')->name('authors') ;
        Route::get('/authors/author-info' ,'authorinfo')->
            name('authorinfo') ;
        });

    Route::controller(ContactController::class)->name('front.')->group(function(){
        Route::get('/contact' , 'contact')->name('contact') ;
        Route::post('/send-message' ,'sendMessage')->name('contact.sendMessage') ;
    });

Auth::routes(['verify'=>true]);
