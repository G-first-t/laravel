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

//here I have to write the regular expressions
Route::match(['post','get'],"/contact/{number}",function(string $number){
    return "My phone number is :: ".$number;
})->where('number','[0-9]+');

Route::any("/pages/{name}",function(string $name){
    return "page name is :: ".$name;
})->where('name','[A-Za-z]+');

Route::get("both/{name}/{number}",function(string $name,string $number){
    return "name is ".$name." and the page is ".$number;
})->where(["name"=>"[A-Za-z]+","number"=>"[1-9]+"]);