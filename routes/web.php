<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    dispatch(function () {
//        logger('hello, world');
//    });
//    return 'finished';
//});

Route::view('/', 'welcome');
