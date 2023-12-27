<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Staff\Database\factories\JobFactory;
use Illuminate\Support\Facades\Auth;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    const ACTIVE = 1;
    const INACTIVE = 0;

    public function userJobFavorites()
{
    return $this->hasMany(UserJobFavorite::class);
}
    public function userJobApplied()
    {
        return $this->hasMany(UserJobAplied::class, 'job_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_job_favorites', 'job_id', 'user_id')->withTimestamps();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
  //is_added_whitlist
  function getIsAddedWhitlistAttribute(){
    $user = Auth::user();
    if($user){
        return UserJobFavorite::where('job_id',$this->id)->where('user', $user)->exists();
    }
    return false;
} 
    function getStatusFmAttribute(){
        if($this->status == self::INACTIVE){
            return '<span>In Active</span>';
        }else{
            return '<span>Active</span>';
        }
    }
}
