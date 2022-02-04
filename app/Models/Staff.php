<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','staff_id','department_id','title','fname','sname','dob','contact','email','status','role','token','pass_photo'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

    public function myupload(){
        return $this->belongsTo('App\Models\MyUpload');
    }
    
}
