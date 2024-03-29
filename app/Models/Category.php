<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'categories_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'categories_id');
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'categories_id');
    }
}
