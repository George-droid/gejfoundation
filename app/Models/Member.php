<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'description',
        'image',
        'category',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(MemberCategory::class);
    }
}
