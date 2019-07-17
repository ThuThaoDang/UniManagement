<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public $primarykey = 'course_id';

    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
