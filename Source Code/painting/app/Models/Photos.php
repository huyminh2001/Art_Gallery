<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model{

    protected $table = 'photos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'status', 'painting_id', 'name'
    ];
}
?>