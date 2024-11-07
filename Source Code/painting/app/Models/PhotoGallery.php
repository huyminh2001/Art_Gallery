<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model{

    protected $table = 'photo_gallery';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name', 'gallery_id'
    ];
}
?>