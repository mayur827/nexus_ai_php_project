<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'image',
        'client_name',
        'profession',
        'description',
    ];
}