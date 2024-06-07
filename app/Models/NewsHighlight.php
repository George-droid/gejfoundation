<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsHighlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'cta',
        'cta_link',
        'house_id',
    ];

    public function house()
    {
        return $this->belongsTo(NewsHouse::class, 'house_id');
    }
}
