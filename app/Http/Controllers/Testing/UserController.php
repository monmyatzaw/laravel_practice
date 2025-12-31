<?php

namespace App\Http\Controllers\Testing;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    // $users = User::with('profile')->get();
    //     echo $users;
    //     dd($users); // user & profile both
        
        $user = User::with('profile')->find(3);
        $profile = $user->profile;
        dd($profile); // profile only

        // $user = User::with('profile')->first();
        // $bio = $user->profile->bio;
        // $user_id = $user->profile->user_id;
        // dd($bio, $user_id);

        // $users = User::with('profile')->get();
        // $user = $users[1];
        // $bio = $user->profile->bio;
        // $user_id = $user->profile->user_id;
        // dd($bio, $user_id);
    }
     public function postList() {
        $user = User::with('posts')->find(3);
        $posts = $user->posts;
        dd($posts);

        // $user_posts  = User::find(3)->posts;
        // dd($user_posts);

        // $user_posts  = User::find(3)->posts;
        // foreach($user_posts as $user_post) 
        //     {$user_post_title[] = $user_post->title;}
        // dd($user_post_title);
    }
    public function showComments(){
        $user_cmt = User::with('userComments')->get(); 

        dd($user_cmt);
    }
}
