<?php

namespace Modules\Transaction\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Transaction\Database\factories\UserFactory;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): UserFactory
    {
        //return UserFactory::new();
    }
    function transaction(){
        return $this->hasMany(Transaciton::class);
    }
}