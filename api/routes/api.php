<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OperationController;

Route::apiResource('operations', OperationController::class);
