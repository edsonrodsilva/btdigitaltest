<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerOrderController;
use Illuminate\Support\Facades\Route;

Route::get('customers', [CustomerController::class, 'index']);
Route::get('customers/{customerNumber}', [CustomerController::class, 'show']);

Route::get('customers/{customerNumber}/orders', [CustomerOrderController::class, 'getAllOrdersByCustomerNumber']);
