<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;

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
