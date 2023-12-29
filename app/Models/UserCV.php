<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCV extends AdminModel
{
    use HasFactory;
    protected $table = 'user_cvs';
}
