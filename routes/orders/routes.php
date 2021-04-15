<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('orders', [OrderController::class, 'index']);
Route::get('orders/{orderNumber}', [OrderController::class, 'show']);
