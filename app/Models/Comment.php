<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post() {
        // this is to show posts throw comments  // relationship about ( one to many)
        return $this->belongsTo(Post::class);
    }
}
