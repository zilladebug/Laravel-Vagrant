<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function scopeByType($query, $roomTypeId = null) {
        if (!is_null($roomTypeId)) {
            $query->where('room_type_id', $roomTypeId);
        }
        return $query;
    }

    public function roomType() {
        /** add's more information in the Rooms index page */
        return $this->belongsTo('App\RoomType', 'room_type_id', 'id');
    }
}
