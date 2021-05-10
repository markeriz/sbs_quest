<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    // Universitetas turi vieną arba daugiau studentų
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
