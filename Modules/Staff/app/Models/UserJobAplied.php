<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Staff\Database\factories\UserJobApliedFactory;

class UserJobAplied extends Model
{
    use HasFactory;
    protected $table = 'user_job_applies';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function userCv()
    {
        return $this->belongsTo(UserCv::class, 'cv_id');
    }
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
