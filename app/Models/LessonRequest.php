<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id_sender',
        'user_id_receiver'

    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id_sender');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'user_id_receiver');
    }
}
