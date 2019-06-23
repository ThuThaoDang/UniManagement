<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Instructor');
    }
}
