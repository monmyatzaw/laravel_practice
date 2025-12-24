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
}
