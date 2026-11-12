<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $fillable = [
        'tool_name',
        'description',
        'status',
    ];
}