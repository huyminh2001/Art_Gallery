<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    protected $table = 'account';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'username',
        'password',
        'date_of_birth',
        'email',
        'phone_number',
        'status',
        'role_id'
    ];
}