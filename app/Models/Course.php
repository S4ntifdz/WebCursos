<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
