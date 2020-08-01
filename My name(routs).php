<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route ::get('/name', function() {
    
    return "My name is Dipanwita ghsoh";
});
