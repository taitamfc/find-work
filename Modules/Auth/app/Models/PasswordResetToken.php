<?php

namespace Modules\Auth\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PasswordResetToken extends Model
{
    use HasFactory;

    protected $table = 'password_reset_tokens';
    public $timestamps = false;
    protected $primaryKey = 'email'; 
    public $incrementing = false;
  
    protected $fillable = [
        'email',
        'token',
    ];
}
