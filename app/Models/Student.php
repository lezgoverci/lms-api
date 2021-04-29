<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function tasks(){
        return $this->belongsToMany(Task::class);
    }

    public function files(){
        return $this->hasManyThrough(File::class, Task::class);
    }
}
