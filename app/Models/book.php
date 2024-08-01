<?php

namespace App\Models;

use Faker\Provider\UserAgent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public function borrowers()
    {
        return $this->belongsToMany(User::class, 'borrowers', 'book_id', 'user_id');
    }
}
