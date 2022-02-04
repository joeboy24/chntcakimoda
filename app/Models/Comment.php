<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_blog_id',
        'name',
        'email',
        'message',
        'date_added',
    ];

    public function newsblog(){
        return $this->belongsTo('App\Models\NewsBlog');
    }

    public function subcomment(){
        return $this->hasMany('App\Models\SubComment');
    }

}
