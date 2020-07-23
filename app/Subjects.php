<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $guarded = [];

    public function program()
    {
        return $this->belongsTo('App\Program', 'program_id');
    }
}
