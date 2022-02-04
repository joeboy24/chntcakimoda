<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamSub extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id','student_id','que_seq','ans_seq','start_time','stop_time','cur_que','que_count','score'
    ];

    public function exam(){
        return $this->belongsTo('App\Models\Exam');
    }

}
