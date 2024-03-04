<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{name?}', function ($name = "trangchu") {
    if ($name == "gioithieu") {
        return view('gioithieu');
    }
    if ($name == "trangchu") {
        return view('trangchu');
    }
    if ($name == "ban") {
        return view('ban');
    }
    if ($name == "ghe") {
        return view('ghe');
    }
    if ($name == "lienhe") {
        return view('lienhe');
    }
});
