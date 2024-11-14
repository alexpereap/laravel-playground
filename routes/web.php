<?php

use Illuminate\Support\Facades\Route;

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