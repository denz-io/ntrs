<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'operator_id',
        'name',
        'address',
        'contact',
        'type',
        'sticker_number',
    ];
}
