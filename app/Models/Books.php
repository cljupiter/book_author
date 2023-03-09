<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['id', 'title', 'total_pages', 'rating', 'isbn', 'published_date'];

    public function authors()
    {
        return $this->belongsToMany(Authors::class, 'book_author', 'book_id', 'author_id');
    }
}

