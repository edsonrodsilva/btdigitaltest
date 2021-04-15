<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;

Route::get('reports/customers/country', [ReportsController::class, 'getCustomersCountry']);
