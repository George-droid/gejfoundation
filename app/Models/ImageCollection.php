<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
