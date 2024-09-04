<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Rout::get('/about',function(){
    return "hello world am new to coding";
});