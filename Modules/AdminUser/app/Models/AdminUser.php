<?php

namespace Modules\AdminUser\app\Models;

use App\Models\AdminModel as Model;
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


    // Custom relation
    public function staff(){
        return $this->hasOne(\Modules\Staff\app\Models\UserStaff::class,'user_id');
    }
    
}
