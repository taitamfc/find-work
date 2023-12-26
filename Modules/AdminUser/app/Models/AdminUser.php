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

    public static function getItems($request = null,$limit = 20){
        $query = self::query(true);
        if($request->type){
            $query->where('type',$request->type);
        }
        if($request->name){
            $query->where('name','LIKE','%'.$request->name.'%');
        }
        if($request->status){
            $query->where('status',$request->status);
        }
        $items = $query->paginate($limit);
        return $items;
    }

    // Custom relation
    public function staff(){
        return $this->hasOne(\Modules\Staff\app\Models\UserStaff::class,'user_id');
    }
    
}
