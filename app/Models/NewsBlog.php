<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsBlog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'title',
        'text',
        'category',
        'tags',
        'date_added',
        'dp'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function comment(){
        return $this->HasMany('App\Models\Comment');
    }
}
