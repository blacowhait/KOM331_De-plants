<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forums extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(users::class);
    }
    
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
