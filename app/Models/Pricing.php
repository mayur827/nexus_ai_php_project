<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'plan',
        'price',
        'description',
        'features',
    ];
}