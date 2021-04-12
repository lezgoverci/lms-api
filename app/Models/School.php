<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function faculties(){
        return $this->belongsToMany(Faculty::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
