<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PaintingSurfaceCategory extends Model{

    protected $table = 'painting_surface_category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}
?>