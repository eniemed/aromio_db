<?php

use App\Http\Controllers\flavorsController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\suppliersController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\ordersController;
use Illuminate\Support\Facades\Route;


Route::get("/flavors", [flavorsController::class,"index"]);
Route::get("/users", [usersController::class,"index"]);
Route::get("/suppliers", [suppliersController::class,"index"]);
Route::get("/products", [productsController::class,"index"]);
Route::get("/orders", [ordersController::class,"index"]);





