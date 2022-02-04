<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdCourseReg extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','student_id','program_id','course_id','year','sem'
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

}
