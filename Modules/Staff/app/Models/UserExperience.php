<?php

namespace Modules\Staff\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Staff\Database\factories\UserExperienceFactory;

class UserExperience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
            'user_id',
            'cv_id',
            'numerical',
            'position',
            'company',
            'level',
            'start_date',
            'end_date',
            'job_description',
    ];
    public static function saveExperienceInformation($request,$cv_id = 0){
        // dd($data);
        if($cv_id){
            $item = self::find($cv_id);
            if(!$item){
                $item = new self;
            }
        }else{
            $item = new self;
        }
        $item->cv_id = session('cv_id');
        // dd($item->cv_id);
        $item->numerical = $request->numerical;
        $item->position = $request->position;
        $item->company = $request->company;
        $item->level = $request->level;
        $item->start_date = $request->start_date;
        $item->end_date = $request->end_date;
        $item->job_description = $request->job_description;
        $item->user_id = $request->user_id;
        // dd($item);
        $item->save();
        return $item;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function userCv()
    {
        return $this->belongsTo(UserCv::class, 'cv_id');
    }
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
