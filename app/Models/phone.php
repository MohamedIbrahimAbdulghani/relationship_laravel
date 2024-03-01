<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class phone extends Model
{
    use HasFactory;
    public function user() {
        // this is to show user throw phone  // relationship about ( one to one)
        return $this->belongsTo(User::class);
    }
}
