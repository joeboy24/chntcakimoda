<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseReg extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','program_id','course_id','year','sem','optional'
    ];

    public function program(){
        return $this->belongsTo('App\Models\Program');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
