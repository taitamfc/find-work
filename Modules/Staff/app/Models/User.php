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
        'phone',
        'birthdate',
    ];
    // Trong mô hình User.php
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
