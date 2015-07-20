<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'pid',
        'title',
        'category_id',
        'published_at',
    ];
}
