<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PaintingColorCategory extends Model{

    protected $table = 'painting_color_category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}
?>