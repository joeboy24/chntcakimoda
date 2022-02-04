<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubComment2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_comment_id',
        'name',
        'email',
        'message',
        'date_added',
    ];

    public function subcomment(){
        return $this->belongsTo('App\Models\SubComment');
    }

}
