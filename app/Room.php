<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',  
        'room_category_id',
        'room_plan',
    ];
    
    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}
