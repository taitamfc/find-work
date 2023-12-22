<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCv extends Model
{
    use HasFactory;
    protected $table = 'user_cvs';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'cv_file',
        'name',
        'email',
        'phone',
        'birthdate',
        'gender',
        'city',
        'address',
        'outstanding_achievements',
        'desired_position',
        'desired_rank',
        'employment_type',
        'industry',
        'desired_location',
        'desired_salary',
        'career_objective',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
