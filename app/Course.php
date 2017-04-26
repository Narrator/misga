<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'description', 'start-date', 'status', 'picture', 'semester', 'location', 'duration'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
