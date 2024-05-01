<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'news';
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'published_at',
        // 'author_id', // Optional if you have authors
        'image',
    ];

    // Relationships (optional)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function author() // Optional
    {
        return $this->belongsTo(User::class);
    }
}
