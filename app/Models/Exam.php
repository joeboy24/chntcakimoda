<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','staff_id','course_id','department_id','exam_title','exam_type','no_of_qs','duration'
    ];

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

}
