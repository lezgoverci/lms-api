<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partnership extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
