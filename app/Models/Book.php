<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();

        static::creating(function ($book) {
            $book->slug = Str::slug($book->title.'-'.$book->author);
        });
    }

    protected $fillable = [
        'title',
        'author',
        'slug',
        'genre',
        'release_date',
        'description',
    ];
}
