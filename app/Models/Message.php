<?php

namespace App\Models;

use App\Models\LessonRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_request_id',
        'user_id_sender',
        'user_id_receiver',
        'content'
    ];

    public function lessonRequest()
    {
        return $this->belongsTo(LessonRequest::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id_sender');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'user_id_receiver');
    }
}
