<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return "hello world am new to coding";
});


Route::match(["get","post"],"/sum",function(){
     $variable_1=457;
     $variable_2=789;
     $sum=$variable_1+$variable_2;
     return $sum;
});

Route::any("/any",function(){
    $my_name="gregory Kimbira";
     return var_dump($my_name);
});
