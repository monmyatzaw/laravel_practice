<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // SELECT users.name FROM users INNER JOIN posts 
    // ON users.id = posts.user_id where posts.id = 3;
    public function postedUser() {;
        $post= Post::find(3); 
        $post_user = $post->user; // ->name
        dd($post_user);}
}
