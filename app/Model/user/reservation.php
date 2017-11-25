<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
