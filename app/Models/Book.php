<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    use HasFactory;
}
