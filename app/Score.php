<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subjects::class);
    }
}
