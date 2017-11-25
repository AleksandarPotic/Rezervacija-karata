<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tiding extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
