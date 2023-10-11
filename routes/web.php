<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::controller('/home', [HomeController::class,'home']);

route::get('/home', function () {
    return'Hello People';
});

route::get('/about', function () {
    return'About Us';
});

route::get('/contact', function () {
    return'Contact Us' ;
});
