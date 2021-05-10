<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'code'
    ];

    // Studijų dalykas gali būti įvertintas vienų arba daugiau pažimių
    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
