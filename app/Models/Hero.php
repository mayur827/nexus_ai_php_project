<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'badge',
        'title',
        'description',
        'primary_button_text',
        'primary_button_link',
        'secondary_button_text',
        'secondary_button_link',
    ];
}
