<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class market extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama', 'slug', 'price', 'desc', 'tp', 'sp', 'foto' ,'bp','user_id'.'clicked'];
    
    public function user()
    {
        return $this->belongsTo(users::class);
    }
    
    public function comments()
    {
        return $this->morphMany(mComment::class, 'commentable')->whereNull('parent_id');
    }
}
