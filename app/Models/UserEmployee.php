<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmployee extends AdminModel
{
    use HasFactory;
    protected $table = 'user_employee';
    public $custom_fields = [
        'name',
        'phone',
        'website',
        'address',
        'image',
        'user_id',
    ];
    protected $fillable = [
        'name',
        'phone',
        'website',
        'address',
        'image',
        'user_id',
    ];
}
