<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturer';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'name_en',
        'description',
        'description_en',
        'banner',
        'content',
        'content_en',
        'status',
        'slug',
        'keyword',
        'keyword_en',
        'image',
    ];
}
