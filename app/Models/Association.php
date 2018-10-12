<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'name_short',
        'name_full',
        'type',
        'head',
        'contact',
        'color'
    ];
}
