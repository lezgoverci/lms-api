<?php

use Illuminate\Database\Eloquent\SoftDeletes;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAdmin extends Model
{
    use HasFactory, SoftDeletes;
}
