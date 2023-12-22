<?php

namespace Modules\Employee\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\Database\factories\UserEmployeeFactory;

class UserEmployee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'user_employees';
    protected $fillable = [
        'company_name',
        'company_email',
        'company_phone',
        'company_address',
        'user_id',
    ];
    
    protected static function newFactory(): UserEmployeeFactory
    {
        //return UserEmployeeFactory::new();
    }

    /**
     * Get the user that owns the UserEmployee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
