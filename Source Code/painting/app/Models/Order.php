<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $table = 'order';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'account_id',
        'created_at',
        'delivery_address',
        'status',
        'update_at',
        'payment_method_id'
        
    ];
}