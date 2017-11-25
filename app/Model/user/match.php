<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    public function sector()
    {
        return $this->hasMany(Sector::class);
    }
}