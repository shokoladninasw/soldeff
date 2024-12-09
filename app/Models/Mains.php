<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mains extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'text',
        'user_id',
        'complait',
    ];

    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
