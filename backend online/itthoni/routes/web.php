<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome', ['name' => 'John']);



Route::get('/pass-array', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];
    $foobar = 'foobar';

    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);
});
