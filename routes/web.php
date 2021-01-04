<?php

use App\Http\Controllers\LaravelSqlFormatterController;
use Illuminate\Support\Facades\Route;

Route::get('/laravel-sql-formatter', [LaravelSqlFormatterController::class, 'test']);

Route::get('/', function () {
    $routeCollection = Route::getRoutes();

    foreach ($routeCollection as $value) {
        $route = $value->uri();
        echo "<div><a href='$route'>$route</a></div>";
    }
});
