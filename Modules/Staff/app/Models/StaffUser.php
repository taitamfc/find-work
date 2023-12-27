<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffUser extends Model
{
    use HasFactory;
    protected $table = 'user_staff'; 

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'phone',
        'birthdate',
        'experience_years',
        'gender',
        'city',
        'address',
        'outstanding_achievements',
        'img',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
