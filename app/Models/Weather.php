<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $table = 'wheathers';
    protected $fillable = ['temperature', 'day_id'];
}
