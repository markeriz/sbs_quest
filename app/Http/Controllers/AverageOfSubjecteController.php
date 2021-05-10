<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentCollection;
use App\Models\Student;

class AverageOfSubjecteController extends Controller
{
    // API response
    public function index()
    {
        return new StudentCollection(Student::with(['university'])->get());
    }

    // WEB response
    public function indexWeb()
    {
        return view('table');
    }
}
