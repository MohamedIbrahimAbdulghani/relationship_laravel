<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class phone extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class);
    }
}