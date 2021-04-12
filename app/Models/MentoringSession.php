<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MentoringSession extends Model
{
    use HasFactory, SoftDeletes;

    public function mentorship(){
        return $this->belongsTo(Mentorship::class);
    }
}
