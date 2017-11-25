<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    public function match()
    {
        return $this->belongsTo(Match::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
