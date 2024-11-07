<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Painting extends Model {
    protected $table = 'painting';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'unique',
        'description',
        'created_at',
        'artist_id',
        'painting_style_category_id',
        'painting_surface_category_id',
        'painting_color_category_id',
        'width',
        'height',
        'status'
    ];
}