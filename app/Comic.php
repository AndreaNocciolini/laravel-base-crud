<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'original_title',
        'volume_n',
        'photo',
        'editor',
        'author',
        'price',
    ];
}
