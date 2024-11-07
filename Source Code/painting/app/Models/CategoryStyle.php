<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryStyle extends Model {
    protected $table = 'painting_style_category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}