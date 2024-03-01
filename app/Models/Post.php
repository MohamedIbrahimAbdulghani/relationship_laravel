<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments() {
        // this is to show comments throw posts  // relationship about ( one to many)
        return $this->hasMany(Comment::class, "post_id");
    }
}
