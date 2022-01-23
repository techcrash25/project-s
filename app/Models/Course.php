<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Relación muchos a muchos
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
