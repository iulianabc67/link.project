<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'active',
        'href',
        'img',
        'alt',
        'title',
        'text'
    ];
}