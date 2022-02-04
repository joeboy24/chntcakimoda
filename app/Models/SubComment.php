<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'name',
        'email',
        'message',
        'date_added',
    ];

    public function comment(){
        return $this->belongsTo('App\Models\Comment');
    }

    public function subcomment2(){
        return $this->HasMany('App\Models\SubComment2');
    }

}
