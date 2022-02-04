<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'program_id',
        // 'staff_id',
        'course_name',
        'course_code'
    ];

    public function program(){
        return $this->belongsTo('App\Models\Program');
    }

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }

    public function myupload(){
        return $this->hasMany('App\Models\MyUpload');
    }
}
