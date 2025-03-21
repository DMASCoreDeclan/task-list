<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return 'Main Page';
});

Route::get("/hello", function () {
    return 'Hello';
});

Route::get('/greet/{name}', function ($name)  {
    return 'Hello ' .  $name . '!';

});
