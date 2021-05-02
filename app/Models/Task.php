<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['materials'];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function student(){
        return $this->belongsToMany(Student::class);
    }

    public function materials(){
        return $this->hasMany(Material::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }

}
