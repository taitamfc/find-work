<?php

namespace Modules\Employee\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\Database\factories\JobapplicationModelFactory;
use Modules\Staff\app\Models\UserCv;
class JobapplicationModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'job_applications';
    protected $fillable = [];
    
    protected static function newFactory(): JobapplicationModelFactory
    {
        //return JobapplicationModelFactory::new();
    }

    public function cv()
    {
        return $this->belongsTo(UserCv::class, 'cv_id');
    }

    /**
     * Get the job associated with the job application.
     */
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
