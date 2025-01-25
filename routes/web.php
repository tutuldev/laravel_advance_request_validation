<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// user group route
Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('home');

    // singel user
    Route::get('/user/{id}','singelUser')->name('view.user');

    // update user
    Route::put('/update/{id}','updateUser')->name('update.user');
    Route::get('/updatepage/{id}','updatePage')->name('update.page');

    // delete user
    Route::get('/delete/{id}','deleteUser')->name('delete.user');

    // add user
    Route::post('/add','addUser')->name('addUser');
});

// add user by form
Route::view('newuser','/adduser');
