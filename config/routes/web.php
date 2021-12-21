<?php

/**
 * --------------------------------------------------------------------------
 * Routes
 * --------------------------------------------------------------------------
 * 
 * Here is where you can register routes for your application.
 * Now create something great!
 * 
 */

use App\Core\Routing\Route;

Route::get('/', function () {
    redirect('/login');
});

Route::get('/home', ['WelcomeController@home', ['auth']]);
