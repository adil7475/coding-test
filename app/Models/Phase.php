<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_completed'
    ];

    function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
