<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'price',
        'type',
        'level',
        'categories_id',
        'subcategories_id',
        'students_acu'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategories_id');
    }
}
