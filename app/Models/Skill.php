<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    
    protected $fillable= [
        'id',
        'name',
        'image'
    ];

    public function project()
    {
        return $this->hasMany(Project::class);
    }
    
}
