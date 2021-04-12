<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function faculties(){
        return $this->hasMany(Faculty::class);
    }
}
