<?php

namespace App\Http\Controllers\Testing;
use App\Models\User;
use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function showLikedPosts(){
        $user = User::find(3);

        // Get all liked posts
        $likedPosts = $user->likedPosts()->get();

        foreach ($likedPosts as $post) {
             // echo $post->title . "<br>";
           $title[] = $post->title;}
        dd($title);
    }
     public function showPostLikers() {
        $post = Post::find(6);

        // Get all users who liked the post
        $likers = $post->likers()->get();

        foreach ($likers as $user) {
            echo($user->name . "<br>");
        }
    }
}
