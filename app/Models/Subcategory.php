<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'categories_id'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'subcategories_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
