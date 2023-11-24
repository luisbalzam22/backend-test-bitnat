<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();
    }

    protected $fillable = [
        'title',
        'author',
        'genre',
        'release_year',
        'description',
        'cover_image_url'
    ];

    /**
     * Returns pivot table ref.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
