<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
