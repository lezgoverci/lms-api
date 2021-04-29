<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function student(){
        return $this->belongsToMany(Student::class);
    }


}
