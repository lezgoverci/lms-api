<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    public function faculties(){
        return $this->belongsToMany(Faculty::class);
    }

    public function schools(){
        return $this->belongsToMany(School::class);
    }

    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
