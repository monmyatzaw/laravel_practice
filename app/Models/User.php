<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function profile()
    {return $this->hasOne(Profile::class);}
    public function posts() 
    { return $this->hasMany(Post::class); }
    public function likedPosts()
    {return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();}
    
    public function userComments()
    {return $this->hasMany(Comment::class); }
    
    // access a model's only one record of data through a model, no direct FK

    public function latestCommentThroughPost() {
  return $this->hasOneThrough(
      Comment::class,  // Final model (C)
      Post::class,     // Intermediate model (B)
      'user_id',       // FK on posts table  posts.user_id
      'post_id',       // FK on comments table  comments.post_id
      'id',            // PK on users table
      'id'             // PK on posts table
  )->latestOfMany(); // user gets the latest comment of a post
 }
    public function commentsThroughPosts() {
    return $this->hasManyThrough(
        Comment::class, // Final model (C)
        Post::class,    // Intermediate model (B)
        'user_id',      // FK on posts table posts.user_id
        'post_id',      // FK on comments table comments.post_id
        'id',           // PK on users table
        'id'            // PK on posts table
    ); // access a model's records through another model
}
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [
        // 'name',
        // 'email',
        // 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
}
