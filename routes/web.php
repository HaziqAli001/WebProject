<?php

use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    "App\Http\Controllers\data@home"
);

Route::get(
    '/team',
    "App\Http\Controllers\data@team"
);
Route::get(
    '/menu',
    "App\Http\Controllers\data@menu"
);
Route::get(
    '/payment',
    "App\Http\Controllers\data@payment"
);
Route::get(
    '/about',
    "App\Http\Controllers\data@about"
);
Route::get(
    '/reservation',
    "App\Http\Controllers\data@reservation"
);
Route::get(
    '/signin',
    "App\Http\Controllers\data@signin"
);
Route::get(
    '/signup',
    "App\Http\Controllers\data@signup"
);
Route::get(
    '/booktable',
    "App\Http\Controllers\data@booktable"
);
Route::get(
    '/navigation',
    "App\Http\Controllers\data@navigation"
);

Route::post('/formcontroller', "App\Http\Controllers\webdatabase@store");
Route::post('/teamcontroller', "App\Http\Controllers\webdatabase@team");
// Admin panel routes

Route::get(
    '/accounts',
    "App\Http\Controllers\data@accounts"
);
Route::get(
    '/dashboard',
    "App\Http\Controllers\data@dashboard"
);
Route::get(
    '/dishedit',
    "App\Http\Controllers\data@dishedit"
);
Route::get(
    '/dishes',
    "App\Http\Controllers\data@dishes"
);
Route::get(
    '/orderdetail',
    "App\Http\Controllers\data@orderdetail"
);
Route::get(
    '/orders',
    "App\Http\Controllers\data@orders"
);
Route::get(
    '/reservationadmin',
    "App\Http\Controllers\data@reservationadmin"
);
Route::get(
    '/specialdish',
    "App\Http\Controllers\data@specialdishes"
);
Route::get(
    '/teamedit',
    "App\Http\Controllers\data@teamedit"
);
Route::get(
    '/teamadmin',
    "App\Http\Controllers\data@teamadmin"
);
