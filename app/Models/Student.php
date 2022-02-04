<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','std_id','program_id','index_no','fname','sname','dob','sex','class','contact','email','sch_contact','sch_email','guardian','guard_rel','guardian_cont','residence','res_address','photo'
    ];

    public function program(){
        return $this->belongsTo('App\Models\Program');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function coursereg(){
        return $this->hasmany('App\Models\StdCourseReg');
    }

}
