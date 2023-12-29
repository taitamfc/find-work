<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Employee\app\Models\Job;

class JobPackage extends AdminModel
{
    use HasFactory;
    protected $table = 'job_packages';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'parent_id',
        'status',
        'position',
        'price'
    ];

    public function job()
    {
        return $this->hasOne(Job::class);
    }
}
