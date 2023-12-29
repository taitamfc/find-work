<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\app\Models\JobApplication;
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
        'rank_id',
        'employment_type',
        'industry',
        'desired_location',
        'desired_salary',
        'career_objective',
    ];
    public static function savePersonalInformation($request,$cv_id = 0){
        if($cv_id){
            $item = self::find($cv_id);
            if(!$item){
                $item = new self;
            }
        }else{
            $item = new self;
        }
        $item->name = $request->name;
        $item->email = $request->email;
        $item->phone = $request->phone;
        $item->birthdate = $request->birthdate;
        $item->gender = $request->gender;
        $item->city = $request->city;
        $item->address = $request->address;
        $item->outstanding_achievements = $request->outstanding_achievements;
        $item->user_id = $request->user_id;
        $item->save();
        return $item;
    }
    public static function saveJobInformation($request,$cv_id = 0){
        if($cv_id){
            $item = self::find($cv_id);
        }else{
            $item = new self;
        }
        $item->cv_file = $request->cv_file;
        $item->desired_position = $request->desired_position;
        $item->rank_id = $request->rank_id;
        $item->employment_type = $request->employment_type;
        $item->industry = $request->industry;
        $item->desired_location = $request->desired_location;
        $item->desired_salary = $request->desired_salary;
        $item->career_objective = $request->career_objective;
        $item->save();
        return $item;
    }
    public function userExperiences()
    {
        return $this->hasMany(UserExperience::class, 'cv_id');
    }
    public function userEducations()
    {
        return $this->hasMany(UserEducation::class, 'cv_id');
    }

    public function userSkills()
    {
        return $this->hasMany(UserSkill::class, 'cv_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function jobApplications()
    // {
    //     return $this->hasMany(JobApplication::class, 'cv_id');
    // }
    public function userJobAplies()
    {
        return $this->hasMany(UserJobAplied::class, 'user_id');
    }
    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
}