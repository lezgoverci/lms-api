<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use HasFactory, SoftDeletes;

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function schools(){
        return $this->belongsToMany(School::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
