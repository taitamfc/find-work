<?php

namespace Modules\Employee\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\Database\factories\JobFactory;
use Modules\Employee\app\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id ',
        'name ',
        'career ',
        'Work_address ',
        'Job_description',
        'Job_requirements ',
        'wage ',
        'type_work ',
    ];
    
    protected static function newFactory(): JobFactory
    {
        //return JobFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }
}
