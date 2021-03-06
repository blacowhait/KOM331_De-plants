<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forums extends Model
{
    use HasFactory;
    
    protected $fillable = ['topic', 'slug', 'title', 'deskripsi', 'vote', 'foto' ,'user_id'];
    
    public function user()
    {
        return $this->belongsTo(users::class);
    }
    
    public function comments()
    {
        return $this->morphMany(comment::class, 'commentable')->whereNull('parent_id');
    }
}
