<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $fillable = ['title', 'completed'];

    public function users(){
        return $this->belongsToMany(User::class, 'users_has_todos')->withTimestamps();
    }
}
