<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
    });
        


Route::get('/hello', function(){
return "helloworld";
});
    
Route::get('/name', function(){
    return "My name is Dipanwita Ghosh";
    });
        
    