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
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];
    
    protected static function newFactory(): AdminUserFactory
    {
        //return AdminUserFactory::new();
    }

    public static function getItems($request = null,$limit = 20,$type = ''){
        $query = self::query(true);
        if($request->type){
            $query->where('type',$request->type);
        }else{
            $query->where('type','user');
        }
        if($request->status !== NULL){
            $query->where('status',$request->status);
        }
        $items = $query->paginate($limit);
        return $items;
    }
    public static function findItem($id,$type = ''){
        return self::findOrFail($id);
    }
    public static function saveItem($request,$type = ''){
        $data = $request->except(['_token', '_method']);
        if ($request->hasFile('image')) {
            $data['image'] = self::uploadFile($request->file('image'), self::$upload_dir);
        }
        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } 
        self::create($data);
    }
    public static function updateItem($id,$request,$type = ''){
        $item = self::findOrFail($id);
        $data = $request->all();
        $data = $request->except(['_token', '_method']);
        if ($request->hasFile('image')) {
            self::deleteFile($item->image);
            $data['image'] = self::uploadFile($request->file('image'), self::$upload_dir);
        }
        if ($data['password']) {
            $data['password'] = bcrypt($data['password']);
        } 
        $item->update($data);
    }
    public static function deleteItem($id,$type = ''){
        $item = self::findItem($id);
        self::deleteFile($item->image);
        return $item->delete();
    }


    // Custom relation
    public function staff(){
        return $this->hasOne(\Modules\Staff\app\Models\UserStaff::class,'user_id');
    }
    
}
