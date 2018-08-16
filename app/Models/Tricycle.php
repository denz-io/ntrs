<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tricycle extends Model
{
    protected $fillable = [
        'association',     
        'control_number',     
        'operator',
        'profile',
        'address',
        'body_number',
        'units',
        'contact'
    ];
}
