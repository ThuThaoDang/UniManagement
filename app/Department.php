<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function instructors()
    {
        return $this->hasMany('App\Instructor');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
