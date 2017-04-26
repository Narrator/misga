<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'date', 'time', 'location', 'status'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
