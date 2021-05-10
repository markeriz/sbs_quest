<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentCollection;
use App\Models\Student;

class AverageOfSubjecteController extends Controller
{
    // API kreipimasis ir grazinimas JSON
    public function index()
    {
        return new StudentCollection(Student::with(['university'])->get());
    }

    // WEB kreipimasis ir gražinimas blade template
    public function indexWeb()
    {
        return view('table');
    }
}
