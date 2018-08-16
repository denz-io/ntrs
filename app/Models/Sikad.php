<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sikad extends Model
{
    protected $fillable = [
        'association',     
        'control_number',     
        'operator',     
        'profile',     
        'address',     
        'body_number',     
        'units',     
        'or_number',     
        'amount_paid',     
        'contact',     
    ];
}
