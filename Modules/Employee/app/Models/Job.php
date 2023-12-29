<?php

namespace Modules\Employee\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\Database\factories\JobFactory;
use Modules\Employee\app\Models\User;
use Modules\Staff\app\Models\UserJobFavorite;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Career;
use App\Models\FormWork;
use App\Models\JobPackage;
use App\Models\Level;
use App\Models\Rank;
use App\Models\Wage;

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

    const ACTIVE    = 1;
    const INACTIVE  = 0;
    const DRAFT     = -1;
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(UserJobApply::class, 'job_id');
    }
    public function userEmployee()
    {
        return $this->belongsTo(UserEmployee::class, 'user_id', 'user_id');

    }
    
    public function careers()
    {
        return $this->belongsToMany(Career::class, 'career_job', 'job_id', 'career_id');
    }

    public function formwork()
    {
        return $this->hasOne(FormWork::class);
    }

    public function jobPackage()
    {
        return $this->hasOne(JobPackage::class);
    }

    public function level()
    {
        return $this->hasOne(Level::class);
    }

    public function rank()
    {
        return $this->hasOne(Rank::class);
    }

    public function wage()
    {
        return $this->hasOne(Wage::class);
    }
}

