<?php

namespace App\Http\Controllers\Testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        // $profile = Profile::find(1);
        // $user_name = $profile->user->name;
        // dd($user_name);

        $profile = Profile::find(3);
        $user_email = $profile->user->email;
        dd($user_email);
     }
}
