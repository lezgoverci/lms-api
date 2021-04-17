<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminPartner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'admin_partner';

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
