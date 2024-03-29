<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
