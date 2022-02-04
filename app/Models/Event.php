<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'text',
        'venue',
        'duration',
        'date_added',
        'dp'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
