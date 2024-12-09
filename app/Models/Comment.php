<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['mains_id', 'author', 'body'];

    public function main()
    {
        return $this->belongsTo(Mains::class);
    }
}
