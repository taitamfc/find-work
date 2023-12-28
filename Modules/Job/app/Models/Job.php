<?php

namespace Modules\Job\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Employee\Database\factories\JobFactory;

use Modules\Employee\app\Models\User;
use Modules\Employee\app\Models\UserEmployee;
use Modules\Staff\app\Models\UserJobFavorite;

use Carbon\Carbon;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = "jobs";
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
    // Relationship
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }
    public function userEmployee()
    {
        return $this->belongsTo(UserEmployee::class, 'user_id', 'user_id');
    }
    //Feature
    function getImageFmAttribute(){
        return $this->userEmployee && $this->userEmployee->image != null ? $this->userEmployee->image :"/website-assets/images/favicon.png";
    }
    function getWageFmAttribute(){
        return number_format($this->wage, 0, ',', '.');
    }
    function getTimeCreateAttribute(){
        return $this->created_at->diffForHumans();
    }
}