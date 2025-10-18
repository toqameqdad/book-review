<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Reviews extends Model
{
    use HasUuids;
    // UUID
    public $incrementing = false;
    protected $keyType = 'string';
    //table
    protected $table = 'reviews';

    //fillable
    protected $fillable = ['content','book_id', 'user_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
