<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'description', 'closing-date', 'salary', 'department', 'company', 'location', 'hours', 'status'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
