<?php

namespace Modules\AdminUser\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\AdminUser\Database\factories\AdminUserFactory;

class AdminUser extends Model
{
    use HasFactory;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): AdminUserFactory
    {
        //return AdminUserFactory::new();
    }
}
