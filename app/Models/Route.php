<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
       'assoc_id', 
       'route_start',
       'route_end',
       'rate',
       'rate_discounted',
    ];
}
