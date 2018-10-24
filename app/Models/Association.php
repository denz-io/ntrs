<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
        'name_short',
        'name_full',
        'type',
        'association_head',
        'contact',
        'association_color'
    ];

    public function getRoutes()
    {
        return $this->hasMany('App\Models\Route', 'assoc_id', 'id');
    }

}
