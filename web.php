<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'SiteController@Home' ) ;
    
Route::get('/about', 'SiteController@Home' ) ;
   
Route::get('/contact', 'SiteController@Home') ;

