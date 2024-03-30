<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Review;
use App\Models\LessonRequest;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'description',
        'birthdate',
        'certificate',
        'address',
        'gender',
        'address_map',
        'phone',
        'identification',
        'resume',
        'response_time'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function lessonRequestsAsSender()
    {
        return $this->hasMany(LessonRequest::class, 'user_id_sender');
    }
    public function lessonRequestsAsReceiver()
    {
        return $this->hasMany(LessonRequest::class, 'user_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function sentReviews()
    {
        return $this->hasMany(Review::class, 'user_id_sender');
    }
    public function receivedReviews()
    {
        return $this->hasMany(Review::class, 'user_id_receiver');
    }
}
