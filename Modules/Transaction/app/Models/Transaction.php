<?php

namespace Modules\Transaction\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Transaction\Database\factories\TransactionFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'item_id',
        'status',
    ];
    
    protected static function newFactory(): TransactionFactory
    {
        //return TransactionFactory::new();
    }

    //RelationShip
    function user(){
        return $this->belongsTo(User::class);
    }

    //Feature
    const ACTIVE = 1;
    const INACTIVE = 0;
    function getStatusFmAttribute(){
        if($this->status == self::INACTIVE){
            return '<span class="btn btn-danger">Chưa phê duyệt</span>';
        }else{
            return '<span class="btn btn-success">Đã phê duyệt</span>';
        }
    }
}