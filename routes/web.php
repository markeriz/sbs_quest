<?php

use App\Http\Controllers\AverageOfSubjecteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AverageOfSubjecteController::class, 'indexWeb']);
