<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function program()
    {
        return $this->hasMany(Subjects::class);
    }
}
