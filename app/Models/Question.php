<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','exam_id','staff_id','department_id','que_no','question','que_inst','diagram','dia_inst','a','b','c','d','answer'
    ];

    public function exam(){
        return $this->belongsTo('App\Models\Exam');
    }

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

}
