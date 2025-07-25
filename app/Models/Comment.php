<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = 
['post_id','content'];

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class);
    }
}
