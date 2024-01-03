<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends AdminModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sort_description',
        'image',
        'gallery',
        'status',
        'position'
    ];
    public function getImage($user_id)
    {
        $userEmployee = $this->userEmployee;

        if ($userEmployee && $userEmployee->image != null) {
            return $userEmployee->image;
        }
        return "/website-assets/images/favicon.png";
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function job_package()
    {
        return $this->belongsTo(JobPackage::class);
    }
    public function careers()
    {
        return $this->belongsToMany(Career::class, 'career_job','job_id','career_id');
    }
    public function wage()
    {
        return $this->belongsTo(Wage::class, 'wage_id');
    }
    public function formWork()
    {
        return $this->belongsTo(FormWork::class, 'formwork_id');
    }
    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }
    public function userEmployee()
    {
        return $this->belongsTo(UserEmployee::class, 'user_id', 'user_id');
    }
}
