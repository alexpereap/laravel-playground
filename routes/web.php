<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MultiController;

Route::get('/', function () {
    return 'hole mundo';
});

Route::get('/user/{id}', function (string $id) {
    dd($id);
});

Route::get('nombre/{name?}', function (?string $name = 'Alex') {
    return $name;
});

Route::get('middle', function () {
    echo "middleware";
})->middleware('admin');

Route::get('/hiuser', UserController::class);

Route::get('/addtxt/{txt}/{extraMessage?}', [MultiController::class, 'addLogTxt']);

Route::get('/addtxtqueue/{txt}', [MultiController::class, 'addLogTxtViaQueue']);