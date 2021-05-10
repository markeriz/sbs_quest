<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'university_id',
        'first_name',
        'last_name'
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function marks()
    {
        return $this->hasMany(Mark::class)->orderBy('subject_id');
    }

    public function subject_average()
    {
        return $this->marks()
                        ->selectRaw('ROUND(AVG(mark),1) as average,student_id,subject_id')
                        ->groupBy('subject_id');
    }

    public function tHeadListAverageOfSubject()
    {
        $list = [
            ['Header' => 'Universitetas', 'accessor' => 'university_name'],
            ['Header' => 'Vardas, pavardė', 'accessor' => 'full_name'],
        ];

        foreach (Subject::get(['name', 'code']) as $value) {
            array_push($list, ['Header' => $value['name'], 'accessor' => 'subjects.'.$value['code']]);
        }

        return $list;
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
