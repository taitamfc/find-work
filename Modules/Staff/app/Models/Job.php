<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Staff\Database\factories\JobFactory;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    const ACTIVE = 1;
    const INACTIVE = 0;
    public function userJobApplied()
    {
        return $this->hasMany(UserJobAplied::class, 'job_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    function getStatusFmAttribute(){
        if($this->status == self::INACTIVE){
            return '<span>In Active</span>';
        }else{
            return '<span>Active</span>';
        }
    }
}
