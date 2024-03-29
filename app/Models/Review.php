<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id_sender',
        'user_id_receiver',
        'content',
        'score',
        'categories_id'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id_sender');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'user_id_receiver');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
