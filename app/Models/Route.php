<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
       'assoc_id', 
       'route',
       'rate',
       'rate_discounted',
    ];
}
