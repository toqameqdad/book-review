<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasUuids ,HasFactory;
    // UUID 
    public $incrementing = false;
    protected $keyType = 'string';

    //table
    protected $table = 'books';
    protected $fillable = ['title', 'user_id', 'description'];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

