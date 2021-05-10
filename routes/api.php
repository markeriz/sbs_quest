<?php

use App\Http\Controllers\AverageOfSubjecteController;
use Illuminate\Support\Facades\Route;

Route::post('/get_marks_avarages', [AverageOfSubjecteController::class, 'index']);
