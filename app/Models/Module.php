<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['tasks'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
