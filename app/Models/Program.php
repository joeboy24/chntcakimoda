<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'department_id',
        'program_name'
    ];

    public function department(){
        return $this->belongsTo('App\Models\Department');
    }

    public function course(){
        return $this->hasMany('App\Models\Course');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
