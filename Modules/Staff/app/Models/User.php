<?php

namespace Modules\Staff\app\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'status',
    ];
    // Trong mô hình User.php

    public function userExperiences()
    {
        return $this->hasMany(UserExperience::class);
    }
    public function userSkills()
    {
        return $this->hasMany(UserSkill::class);
    }
    public function userEducations()
    {
        return $this->hasMany(UserEducation::class);
    }
    public function staffUser()
    {
        return $this->hasOne(StaffUser::class);
    }
    public function userStaff()
    {
        return $this->hasOne(UserStaff::class);
    }
    public function userCv()
    {
        return $this->hasOne(UserCv::class);
    }
   
}
