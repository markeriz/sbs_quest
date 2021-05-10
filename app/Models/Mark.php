<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'mark',
        'student_id',
        'subject_id'
    ];

    // Įvertinimas privalo turėti vieną studentą
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // Įvertinimas privalo turėti vieną studijų dalyką
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
